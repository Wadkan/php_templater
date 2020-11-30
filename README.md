# Surprise Templeton

## Story

Your buddy Templeton is a really nice guy. You and your friends just call him Temp.
Every time you wanna catch up, he is sure to be late. The reason is always the same: his car is a wreck.

One day you decided that you should help him out and buy a new one. The price tags weren't really for your budget, so you started to look for something used and found a good fit. The only issue is that it has no engine. It is your job to build one, which seems like a lot of work but also can be fun as well.
The codename of the project is `Temp Late Engine`.

## What are you going to learn?

- read file contents
- work with strings in a more advanced manner
- build a template engine

## Tasks

1. Create a class named `Templeton` in `templeton` folder for the template engine.
    - `Templeton` class exists in the `templeton/Templeton.php`.

2. Create a `Class Constructor` with one `required parameter`, which specifies the folder of the template files.
    - `Class Constructor` exists in `Templeton` class and has a `required parameter` for the folder of the template files.

3. Implement the `run(string templateName, array templateVariables) : string` method that returns the rendered version of the given template.
The template files must use `HTML syntax` expanded with the ability to use variables inside, e.g. `<h1>{{ titleOfPage }}</h1>`
    - New `run(string templateName, array templateVariables) : string` method exists in `Templeton` class and returns the rendered template.

4. Create the documentation of your project in `docs` folder.
It must use your template engine and must have three sections (Introduction, How to use, About).
    - Documentation file(s) exist(s) in `docs` folder and contain(s) three sections (Introduction, How to use, About).
    - Documentation uses the documented template engine.

## General requirements

None

## Hints

- Try to think of this project as if it were a bit more robust version of the fancy search functionality of AskMate
- You can use custom file extensions for your templates. **Interesting fact:** _*.wad_ (which is an acrostic for _"Where's All the Data?"_) is the file format used by all Doom-engine-based games for storing data.

## Background materials

- <i class="far fa-exclamation"></i> [PHP File Handling](https://www.w3schools.com/php/php_file.asp)
- <i class="far fa-book-open"></i> [Working with Files in PHP](https://www.sitepoint.com/working-with-files-in-php/)
- <i class="far fa-candy-cane"></i> [PHP Regular Expressions](https://www.w3schools.com/php/php_regex.asp)
- <i class="far fa-candy-cane"></i> [Custom file extensions in JetBrains IDEs](project/curriculum/materials/pages/jetbrains/custom-file-extensions-in-jetbrains-ides.md)
