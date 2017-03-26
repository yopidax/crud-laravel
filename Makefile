.PHONY: cs fmt test
CODE_SNIFFER_OPTIONS = --colors --standard="psr2" --encoding="utf-8"

cs:
	php vendor/bin/phpcs $(CODE_SNIFFER_OPTIONS) app/

fmt:
	php vendor/bin/phpcbf $(CODE_SNIFFER_OPTIONS) app/

test:
	php vendor/bin/phpunit -c phpunit.xml tests/
