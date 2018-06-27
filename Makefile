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

api: api-get-apigen
	# Build the package if necessary.
	[ -d build/artifacts/staging ] || make package
	# Delete a previously built API build to avoid the prompt.
	rm -rf build/artifacts/docs
	php build/artifacts/apigen.phar generate --config build/docs/apigen.neon --debug

api-get-apigen:
	mkdir -p build/artifacts
	[ -f build/artifacts/apigen.phar ] || wget -q -O build/artifacts/apigen.phar https://github.com/ApiGen/ApiGen/releases/download/v4.1.0/apigen-4.1.0.phar

api-show:
	open build/artifacts/docs/index.html

api-package:
	zip -r build/artifacts/ebay-sdk-php-docs-api.zip build/artifacts/docs

# Packages the phar and zip
package:
	php build/packager.php

# Ensures that the TAG variable was passed to the make command
check_tag:
	$(if $(TAG),,$(error TAG is not defined. Pass via "make tag TAG=4.2.1"))

# Creates a release but does not push it. This task updates the changelog
# with the TAG environment variable, replaces the VERSION constant, ensures
# that the source is still valid after updating, commits the changelog and
# updated VERSION constant, and prints out a diff of the last commit.
tag: check_tag
	@echo Tagging $(TAG)
	chag update $(TAG)
	sed -i -e "s/const VERSION = '.*'/const VERSION = '$(TAG)'/" src/Sdk.php
	php -l src/Sdk.php
	git commit -a -m 'update: bump version to $(TAG)'
	@echo "Release has been created. Push using 'make release'"
	@echo "Changes made in the release commit"
	git diff HEAD~1 HEAD

# Creates a release based on the master branch and latest tag. This task
# creates an annotated git tag using chag, pushes the latest tag,
# pushes master, creates a phar and zip, and creates Github release.
# Use "TAG=X.Y.Z make tag" to create a release, and use
# "make release" to push a release. This task requires that the
# OAUTH_TOKEN environment variable is available and the token has permission
# to push to the repository.
release: check_tag clean package
	chag tag
	git push origin master
	git push origin $(TAG)
	php build/gh-release.php $(TAG)

# Tags the repo and publishes a release.
full_release: tag release

sync_account:
	rsync -rtvu --delete --exclude *BaseService.php ../ebay-api-sdk-php/dist/Account/src/Account/ src/Account/
	rsync -rtvu --delete --exclude /Mocks/ --exclude /Services/ ../ebay-api-sdk-php/dist/Account/test/Account/ test/Account/

sync_analytics:
	rsync -rtvu --delete --exclude *BaseService.php ../ebay-api-sdk-php/dist/Analytics/src/Analytics/ src/Analytics/
	rsync -rtvu --delete --exclude /Mocks/ --exclude /Services/ ../ebay-api-sdk-php/dist/Analytics/test/Analytics/ test/Analytics/

sync_browse:
	rsync -rtvu --delete --exclude *BaseService.php ../ebay-api-sdk-php/dist/Browse/src/Browse/ src/Browse/
	rsync -rtvu --delete --exclude /Mocks/ --exclude /Services/ ../ebay-api-sdk-php/dist/Browse/test/Browse/ test/Browse/

sync_bulk:
	rsync -rtvu --delete --exclude *BaseService.php ../ebay-api-sdk-php/dist/BulkDataExchange/src/BulkDataExchange/ src/BulkDataExchange/
	rsync -rtvu --delete --exclude /Mocks/ --exclude /Services/ ../ebay-api-sdk-php/dist/BulkDataExchange/test/BulkDataExchange/ test/BulkDataExchange/

sync_bus:
	rsync -rtvu  --delete --exclude *BaseService.php ../ebay-api-sdk-php/dist/BusinessPoliciesManagement/src/BusinessPoliciesManagement/ src/BusinessPoliciesManagement/
	rsync -rtvu --delete --exclude /Mocks/ --exclude /Services/ ../ebay-api-sdk-php/dist/BusinessPoliciesManagement/test/BusinessPoliciesManagement/ test/BusinessPoliciesManagement/

sync_catalog:
	rsync -rtvu --delete --exclude *BaseService.php ../ebay-api-sdk-php/dist/Catalog/src/Catalog/ src/Catalog/
	rsync -rtvu --delete --exclude /Mocks/ --exclude /Services/ ../ebay-api-sdk-php/dist/Catalog/test/Catalog/ test/Catalog/

sync_compliance:
	rsync -rtvu --delete --exclude *BaseService.php ../ebay-api-sdk-php/dist/Compliance/src/Compliance/ src/Compliance/
	rsync -rtvu --delete --exclude /Mocks/ --exclude /Services/ ../ebay-api-sdk-php/dist/Compliance/test/Compliance/ test/Compliance/

sync_feed:
	rsync -rtvu --delete --exclude *BaseService.php ../ebay-api-sdk-php/dist/Feed/src/Feed/ src/Feed/
	rsync -rtvu --delete --exclude /Mocks/ --exclude /Services/ ../ebay-api-sdk-php/dist/Feed/test/Feed/ test/Feed/

sync_feedback:
	rsync -rtvu  --delete --exclude *BaseService.php ../ebay-api-sdk-php/dist/Feedback/src/Feedback/ src/Feedback/
	rsync -rtvu --delete --exclude /Mocks/ --exclude /Services/ ../ebay-api-sdk-php/dist/Feedback/test/Feedback/ test/Feedback/

sync_file:
	rsync -rtvu --delete --exclude *BaseService.php --exclude Data.php --exclude XopInclude.php ../ebay-api-sdk-php/dist/FileTransfer/src/FileTransfer/ src/FileTransfer/
	rsync -rtvu --delete --exclude /Mocks/ --exclude /Services/ ../ebay-api-sdk-php/dist/FileTransfer/test/FileTransfer/ test/FileTransfer/
	sed -i -e "s/@property string/@property \\\DTS\\\eBaySDK\\\FileTransfer\\\Types\\\Data/" src/FileTransfer/Types/FileAttachment.php
	sed -i -e "s/'string'/'DTS\\\eBaySDK\\\FileTransfer\\\Types\\\Data'/" src/FileTransfer/Types/FileAttachment.php

sync_finding:
	rsync -rtvu --delete --exclude *BaseService.php ../ebay-api-sdk-php/dist/Finding/src/Finding/ src/Finding/
	rsync -rtvu --delete --exclude /Mocks/ --exclude /Services/ ../ebay-api-sdk-php/dist/Finding/test/Finding/ test/Finding/

sync_fulfillment:
	rsync -rtvu --delete --exclude *BaseService.php ../ebay-api-sdk-php/dist/Fulfillment/src/Fulfillment/ src/Fulfillment/
	rsync -rtvu --delete --exclude /Mocks/ --exclude /Services/ ../ebay-api-sdk-php/dist/Fulfillment/test/Fulfillment/ test/Fulfillment/

sync_half:
	rsync -rtvu --delete --exclude *BaseService.php ../ebay-api-sdk-php/dist/HalfFinding/src/HalfFinding/ src/HalfFinding/
	rsync -rtvu --delete --exclude /Mocks/ --exclude /Services/ ../ebay-api-sdk-php/dist/HalfFinding/test/HalfFinding/ test/HalfFinding/

sync_inventory:
	rsync -rtvu --delete --exclude *BaseService.php ../ebay-api-sdk-php/dist/Inventory/src/Inventory/ src/Inventory/
	rsync -rtvu --delete --exclude /Mocks/ --exclude /Services/ ../ebay-api-sdk-php/dist/Inventory/test/Inventory/ test/Inventory/

sync_marketing:
	rsync -rtvu --delete --exclude *BaseService.php ../ebay-api-sdk-php/dist/Marketing/src/Marketing/ src/Marketing/
	rsync -rtvu --delete --exclude /Mocks/ --exclude /Services/ ../ebay-api-sdk-php/dist/Marketing/test/Marketing/ test/Marketing/

sync_merchand:
	rsync -rtvu --delete --exclude *BaseService.php ../ebay-api-sdk-php/dist/Merchandising/src/Merchandising/ src/Merchandising/
	rsync -rtvu --delete --exclude /Mocks/ --exclude /Services/ ../ebay-api-sdk-php/dist/Merchandising/test/Merchandising/ test/Merchandising/

sync_merc:
	rsync -rtvu --delete --exclude MerchantData.php ../ebay-api-sdk-php/dist/MerchantData/src/MerchantData/ src/MerchantData/
	rsync -rtvu --delete --exclude /Mocks/ --exclude MerchantDataTest.php ../ebay-api-sdk-php/dist/MerchantData/test/MerchantData/ test/MerchantData/

sync_metadata:
	rsync -rtvu --delete --exclude *BaseService.php ../ebay-api-sdk-php/dist/Metadata/src/Metadata/ src/Metadata/
	rsync -rtvu --delete --exclude /Mocks/ --exclude /Services/ ../ebay-api-sdk-php/dist/Metadata/test/Metadata/ test/Metadata/

sync_order:
	rsync -rtvu --delete --exclude *BaseService.php ../ebay-api-sdk-php/dist/Order/src/Order/ src/Order/
	rsync -rtvu --delete --exclude /Mocks/ --exclude /Services/ ../ebay-api-sdk-php/dist/Order/test/Order/ test/Order/

sync_taxonomy:
	rsync -rtvu --delete --exclude *BaseService.php ../ebay-api-sdk-php/dist/Taxonomy/src/Taxonomy/ src/Taxonomy/
	rsync -rtvu --delete --exclude /Mocks/ --exclude /Services/ ../ebay-api-sdk-php/dist/Taxonomy/test/Taxonomy/ test/Taxonomy/

sync_post:
	rsync -rtvu --delete --exclude *BaseService.php ../ebay-api-sdk-php/dist/PostOrder/src/PostOrder/ src/PostOrder/
	rsync -rtvu --delete --exclude /Mocks/ --exclude /Services/ ../ebay-api-sdk-php/dist/PostOrder/test/PostOrder/ test/PostOrder/

sync_product:
	rsync -rtvu --delete --exclude *BaseService.php ../ebay-api-sdk-php/dist/Product/src/Product/ src/Product/
	rsync -rtvu --delete --exclude /Mocks/ --exclude /Services/ ../ebay-api-sdk-php/dist/Product/test/Product/ test/Product/

sync_product_metadata:
	rsync -rtvu --delete --exclude *BaseService.php ../ebay-api-sdk-php/dist/ProductMetadata/src/ProductMetadata/ src/ProductMetadata/
	rsync -rtvu --delete --exclude /Mocks/ --exclude /Services/ ../ebay-api-sdk-php/dist/ProductMetadata/test/ProductMetadata/ test/ProductMetadata/

sync_related:
	rsync -rtvu  --delete --exclude *BaseService.php ../ebay-api-sdk-php/dist/RelatedItemsManagement/src/RelatedItemsManagement/ src/RelatedItemsManagement/
	rsync -rtvu --delete --exclude /Mocks/ --exclude /Services/ ../ebay-api-sdk-php/dist/RelatedItemsManagement/test/RelatedItemsManagement/ test/RelatedItemsManagement/

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

sync_all: sync_account		\
	  sync_analytics	\
	  sync_browse		\
	  sync_bulk		\
	  sync_bus		\
	  sync_catalog		\
	  sync_compliance	\
	  sync_feedback		\
	  sync_file		\
	  sync_finding		\
	  sync_fulfillment	\
	  sync_half		\
	  sync_inventory	\
	  sync_marketing	\
          sync_merchand		\
	  sync_merc		\
	  sync_metadata		\
	  sync_order		\
	  sync_post		\
	  sync_product		\
	  sync_product_metadata	\
          sync_related		\
	  sync_res		\
	  sync_return		\
	  sync_shop		\
	  sync_trade

.PHONY: test
