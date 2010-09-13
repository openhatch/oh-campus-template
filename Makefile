all: index.html

index.html: template.php page-data/index
	php page-data/index > index.html
