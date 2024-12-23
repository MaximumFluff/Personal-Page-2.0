# Personal page 2.0

Total re-write of my personal page in PHP utilizing Plates templating and Parsedown libraries.

`configuration.json` file contains data for my resume, skills list and blog post metadata. This file is parsed and used to pass data to the templating files.

A simple router matches the URL and returns appropriate templates.

## How to run

Run locally utilizing in-built live server:

`php -S localhost:1234`

## Folder structure

|Folder|Description|
|----|----|
|/public|CSS and image files|
|/templates|Plates templating files|
|/articles|Contains markdown files for blog posts|

## Libraries used

- Plates
- Parsedown
