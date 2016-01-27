# This Makefile was taken from the AWS for PHP project with some modifications.
#
# https://github.com/aws/aws-sdk-php/blob/2.7.19/Makefile

test:
	vendor/bin/phpunit $(TEST)

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
	sed -i -e "s/const VERSION = '.*'/const VERSION = '$(TAG)'/" src/DTS/eBaySDK/Sdk.php
	php -l src/DTS/eBaySDK/Sdk.php
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
	rsync -rtvu --delete --exclude *BaseService.php ../ebay-api-sdk-php/dist/BulkDataExchange/src/DTS/eBaySDK/BulkDataExchange/ src/DTS/eBaySDK/BulkDataExchange/
	rsync -rtvu --delete --exclude /Mocks/ --exclude /Services/ ../ebay-api-sdk-php/dist/BulkDataExchange/test/DTS/eBaySDK/BulkDataExchange/ test/DTS/eBaySDK/BulkDataExchange/

sync_bus:
	rsync -rtvu  --delete --exclude *BaseService.php ../ebay-api-sdk-php/dist/BusinessPoliciesManagement/src/DTS/eBaySDK/BusinessPoliciesManagement/ src/DTS/eBaySDK/BusinessPoliciesManagement/
	rsync -rtvu --delete --exclude /Mocks/ --exclude /Services/ ../ebay-api-sdk-php/dist/BusinessPoliciesManagement/test/DTS/eBaySDK/BusinessPoliciesManagement/ test/DTS/eBaySDK/BusinessPoliciesManagement/

sync_file:
	rsync -rtvu --delete --exclude *BaseService.php --exclude Data.php --exclude XopInclude.php ../ebay-api-sdk-php/dist/FileTransfer/src/DTS/eBaySDK/FileTransfer/ src/DTS/eBaySDK/FileTransfer/
	rsync -rtvu --delete --exclude /Mocks/ --exclude /Services/ ../ebay-api-sdk-php/dist/FileTransfer/test/DTS/eBaySDK/FileTransfer/ test/DTS/eBaySDK/FileTransfer/
	sed -i -e "s/@property string/@property \\\DTS\\\eBaySDK\\\FileTransfer\\\Types\\\Data/" src/DTS/eBaySDK/FileTransfer/Types/FileAttachment.php
	sed -i -e "s/'string'/'DTS\\\eBaySDK\\\FileTransfer\\\Types\\\Data'/" src/DTS/eBaySDK/FileTransfer/Types/FileAttachment.php

sync_finding:
	rsync -rtvu --delete --exclude *BaseService.php ../ebay-api-sdk-php/dist/Finding/src/DTS/eBaySDK/Finding/ src/DTS/eBaySDK/Finding/
	rsync -rtvu --delete --exclude /Mocks/ --exclude /Services/ ../ebay-api-sdk-php/dist/Finding/test/DTS/eBaySDK/Finding/ test/DTS/eBaySDK/Finding/

sync_half:
	rsync -rtvu --delete --exclude *BaseService.php ../ebay-api-sdk-php/dist/HalfFinding/src/DTS/eBaySDK/HalfFinding/ src/DTS/eBaySDK/HalfFinding/
	rsync -rtvu --delete --exclude /Mocks/ --exclude /Services/ ../ebay-api-sdk-php/dist/HalfFinding/test/DTS/eBaySDK/HalfFinding/ test/DTS/eBaySDK/HalfFinding/

sync_merc:
	rsync -rtvu --delete --exclude MerchantDataService.php ../ebay-api-sdk-php/dist/MerchantData/src/DTS/eBaySDK/MerchantData/ src/DTS/eBaySDK/MerchantData/
	rsync -rtvu --delete --exclude /Mocks/ --exclude /Services/ ../ebay-api-sdk-php/dist/MerchantData/test/DTS/eBaySDK/MerchantData/ test/DTS/eBaySDK/MerchantData/

sync_res:
	rsync -rtvu --delete --exclude *BaseService.php ../ebay-api-sdk-php/dist/ResolutionCaseManagement/src/DTS/eBaySDK/ResolutionCaseManagement/ src/DTS/eBaySDK/ResolutionCaseManagement/
	rsync -rtvu --delete --exclude /Mocks/ --exclude /Services/ ../ebay-api-sdk-php/dist/ResolutionCaseManagement/test/DTS/eBaySDK/ResolutionCaseManagement/ test/DTS/eBaySDK/ResolutionCaseManagement/

sync_return:
	rsync -rtvu --delete --exclude *BaseService.php ../ebay-api-sdk-php/dist/ReturnManagement/src/DTS/eBaySDK/ReturnManagement/ src/DTS/eBaySDK/ReturnManagement/
	rsync -rtvu --delete --exclude /Mocks/ --exclude /Services/ ../ebay-api-sdk-php/dist/ReturnManagement/test/DTS/eBaySDK/ReturnManagement/ test/DTS/eBaySDK/ReturnManagement/

sync_shop:
	rsync -rtvu --delete --exclude *BaseService.php ../ebay-api-sdk-php/dist/Shopping/src/DTS/eBaySDK/Shopping/ src/DTS/eBaySDK/Shopping/
	rsync -rtvu --delete --exclude /Mocks/ --exclude /Services/ ../ebay-api-sdk-php/dist/Shopping/test/DTS/eBaySDK/Shopping/ test/DTS/eBaySDK/Shopping/

sync_trade:
	rsync -rtvu --delete --exclude *BaseService.php ../ebay-api-sdk-php/dist/Trading/src/DTS/eBaySDK/Trading/ src/DTS/eBaySDK/Trading/
	rsync -rtvu --delete --exclude /Mocks/ --exclude /Services/ ../ebay-api-sdk-php/dist/Trading/test/DTS/eBaySDK/Trading/ test/DTS/eBaySDK/Trading/

sync_all: sync_bulk sync_bus sync_file sync_finding sync_half sync_merc sync_res sync_return sync_shop sync_trade

.PHONY: test
