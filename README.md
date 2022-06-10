# Project: Tea Leaf :leaves:

## Project info

We love to drink tea, especially from the store Javana, but the problem was that Javana has a lot of tea but no way for you to remember which ones you like, don't like, what are your favourites or for which ones are you curious to try out. So instead of keeping track by cutting out the info sticker of the tea packages, we decided we would make a database of Javana's teas and use that database to keep track of your teas. There are 4 categories:

-   Favourites
-   Like
-   Dislike
-   Want to try

On the homepage you have an overview of all teas in our database (we kept it small for the purpose of the exercise). When you log in, you can also see on the homepage which teas already belong to one of the 4 categories. You can also find a filter option based on the characteristics of each tea.

On the my collection page you have an overview of all the teas that belong to one of the 4 categories. Here you can also decide whether or not you want to delete a tea from a certain category

## Tech choice

Because we heavily rely on our database, our go to framework is Laravel. Querying is done via Eloquent.

For the front-end we use the Blade templates and for the styling we opt for Tailwind CSS.

In order to not loose too much time with logging in/registering we choose Laravel Breeze.

For icons we choose something that's called Blade Icons - Blade UI kit. It makes use of SVG's and a huge library of icons to implement in your laravel project.

## Role division

[Cynthia Decelle](https://github.com/Cynthia-CDDC) mainly did the back-end:

-   Building the database + relationships between them
-   Querying (via Eloquent)
-   Support for front-end where necessary

[Michelle Radomski](https://github.com/Michelle-Radomski) mainly did the front-end:

-   Injecting code in Blade
-   Lay-out of each page
-   General styling
-   Choice of colours
-   Deploying on Heroku
-   Support for back-end where necessary

Ofcourse everything we did was discussed together to check if we both agreed with features etc.

## Communication

Ofcourse we know that communication is key! We stayed in contact with eachother the whole time via Discord and agreed on coming together each morning and afternoon to brief eachother on what we did and wanted to do for that day.
