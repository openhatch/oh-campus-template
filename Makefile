all: index.html hackathon/index.html

clean:
	@rm index.html
	@rm hackathon/index.html

index.html: template.php page-data/index
	php page-data/index > index.html

hackathon/index.html: template.php page-data/hackathon
	php page-data/hackathon > hackathon/index.html
