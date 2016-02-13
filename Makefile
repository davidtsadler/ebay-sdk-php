# This Makefile was taken from the AWS for PHP project with some modifications.
#
# https://github.com/aws/aws-sdk-php/blob/2.7.19/Makefile
#
phpcs-report:
	@vendor/bin/phpcs $(DIR) --extensions=php --standard=PSR2 --report=summary -n

phpcs:
	@vendor/bin/phpcs $(DIR) --extensions=php --standard=PSR2 -n -a

phpcbf:
	@vendor/bin/phpcbf $(DIR) --extensions=php --standard=PSR2 -n

test:
	@vendor/bin/phpunit $(TEST)

clean:
	rm -rf build/artifacts
	cd docs && make clean

guide:
	cd docs && make html

guide-show:
	open docs/_build/html/index.html

# Packages the phar and zip
package: burgomaster
	php build/packager.php

# Downloads a copy of Burgomaster
burgomaster:
	mkdir -p build/artifacts
	curl -s https://raw.githubusercontent.com/mtdowling/Burgomaster/0.0.2/src/Burgomaster.php > build/artifacts/Burgomaster.php

# Ensures that the TAG variable was passed to the make command
check_tag:
	$(if $(TAG),,$(error TAG is not defined. Pass via "make tag TAG=4.2.1"))

# Creates a release but does not push it. This task updates the changelog
# with the TAG environment variable, replaces the VERSION constant, ensures
# that the source is still valid after updating, commits the changelog and
# updated VERSION constant, creates an annotated git tag using chag, and
# prints out a diff of the last commit.
tag: check_tag
	@echo Tagging $(TAG)
	chag update $(TAG)
	sed -i -e "s/const VERSION = '.*'/const VERSION = '$(TAG)'/" src/Sdk.php
	php -l src/Sdk.php
	git commit -a -m '$(TAG) release'
	chag tag
	@echo "Release has been created. Push using 'make release'"
	@echo "Changes made in the release commit"
	git diff HEAD~1 HEAD

# Creates a release based on the master branch and latest tag. This task
# pushes the latest tag, pushes master, creates a phar and zip, and creates
# a Github release. Use "TAG=X.Y.Z make tag" to create a release, and use
# "make release" to push a release. This task requires that the
# OAUTH_TOKEN environment variable is available and the token has permission
# to push to the repository.
release: check_tag package
	git push origin master
	git push origin $(TAG)
	php build/gh-release.php $(TAG)

# Tags the repo and publishes a release.
full_release: tag release

sync_bulk:
	rsync -rtvu --delete --exclude *BaseService.php ../ebay-api-sdk-php/dist/BulkDataExchange/src/BulkDataExchange/ src/BulkDataExchange/
	rsync -rtvu --delete --exclude /Mocks/ --exclude /Services/ ../ebay-api-sdk-php/dist/BulkDataExchange/test/BulkDataExchange/ test/BulkDataExchange/

sync_bus:
	rsync -rtvu  --delete --exclude *BaseService.php ../ebay-api-sdk-php/dist/BusinessPoliciesManagement/src/BusinessPoliciesManagement/ src/BusinessPoliciesManagement/
	rsync -rtvu --delete --exclude /Mocks/ --exclude /Services/ ../ebay-api-sdk-php/dist/BusinessPoliciesManagement/test/BusinessPoliciesManagement/ test/BusinessPoliciesManagement/

sync_file:
	rsync -rtvu --delete --exclude *BaseService.php --exclude Data.php --exclude XopInclude.php ../ebay-api-sdk-php/dist/FileTransfer/src/FileTransfer/ src/FileTransfer/
	rsync -rtvu --delete --exclude /Mocks/ --exclude /Services/ ../ebay-api-sdk-php/dist/FileTransfer/test/FileTransfer/ test/FileTransfer/
	sed -i -e "s/@property string/@property \\\DTS\\\eBaySDK\\\FileTransfer\\\Types\\\Data/" src/FileTransfer/Types/FileAttachment.php
	sed -i -e "s/'string'/'DTS\\\eBaySDK\\\FileTransfer\\\Types\\\Data'/" src/FileTransfer/Types/FileAttachment.php

sync_finding:
	rsync -rtvu --delete --exclude *BaseService.php ../ebay-api-sdk-php/dist/Finding/src/Finding/ src/Finding/
	rsync -rtvu --delete --exclude /Mocks/ --exclude /Services/ ../ebay-api-sdk-php/dist/Finding/test/Finding/ test/Finding/

sync_half:
	rsync -rtvu --delete --exclude *BaseService.php ../ebay-api-sdk-php/dist/HalfFinding/src/HalfFinding/ src/HalfFinding/
	rsync -rtvu --delete --exclude /Mocks/ --exclude /Services/ ../ebay-api-sdk-php/dist/HalfFinding/test/HalfFinding/ test/HalfFinding/

sync_merc:
	rsync -rtvu --delete --exclude MerchantDataService.php ../ebay-api-sdk-php/dist/MerchantData/src/MerchantData/ src/MerchantData/
	rsync -rtvu --delete --exclude /Mocks/ --exclude /Services/ ../ebay-api-sdk-php/dist/MerchantData/test/MerchantData/ test/MerchantData/

sync_res:
	rsync -rtvu --delete --exclude *BaseService.php ../ebay-api-sdk-php/dist/ResolutionCaseManagement/src/ResolutionCaseManagement/ src/ResolutionCaseManagement/
	rsync -rtvu --delete --exclude /Mocks/ --exclude /Services/ ../ebay-api-sdk-php/dist/ResolutionCaseManagement/test/ResolutionCaseManagement/ test/ResolutionCaseManagement/

sync_return:
	rsync -rtvu --delete --exclude *BaseService.php ../ebay-api-sdk-php/dist/ReturnManagement/src/ReturnManagement/ src/ReturnManagement/
	rsync -rtvu --delete --exclude /Mocks/ --exclude /Services/ ../ebay-api-sdk-php/dist/ReturnManagement/test/ReturnManagement/ test/ReturnManagement/

sync_shop:
	rsync -rtvu --delete --exclude *BaseService.php ../ebay-api-sdk-php/dist/Shopping/src/Shopping/ src/Shopping/
	rsync -rtvu --delete --exclude /Mocks/ --exclude /Services/ ../ebay-api-sdk-php/dist/Shopping/test/Shopping/ test/Shopping/

sync_trade:
	rsync -rtvu --delete --exclude *BaseService.php ../ebay-api-sdk-php/dist/Trading/src/Trading/ src/Trading/
	rsync -rtvu --delete --exclude /Mocks/ --exclude /Services/ ../ebay-api-sdk-php/dist/Trading/test/Trading/ test/Trading/

sync_all: sync_bulk sync_bus sync_file sync_finding sync_half sync_merc sync_res sync_return sync_shop sync_trade

.PHONY: test
