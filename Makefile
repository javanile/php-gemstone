

start:
	@docker-compose up -d
	@echo "Open this page <http://localhost:8080>"

release:
	@git add .
	@git commit -am "Release updates"
	@git push