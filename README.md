# Mini-Tripadvisor

## Description

You have the Mysql Workbench Model ``schema-table.mwb``.
![schema-table](schema-table.png)
Wireframe for website.
![desgin1](design1.jpeg)
![desgin2](design2.jpeg)
![desgin3](design3.jpeg)
![desgin4](design4.jpeg)


## Getting Started

### Dependencies

* Need composer and PHP. 

### Installing

* Git clone or download the repositery.

* Install vendor 
            ```
            composer update
            ```

* Create a MySQL database

* Copy and rename .env.exmple  
        ```
        cp .env.example .env
        ```

* Configure the .env with the databse created

* Launch localy the laravel server
        ```
        php artisan serve
        ```

### Website Navigation

To create an account or sign-in press the "Register or Sign-in" button and to logout press the "Logout" button.  
In order to add aplace, you must login and press the "+" button. To delete a place you have added, click on the place and then on the trash icon. You can only delete places that you have added.  
To add a comment and/or a rating to a place, click on the place in question, select the grade and/or write your comment in the space provided on the product page. To delete your review, press the bin icon next to your review. You can only delete reviews that you have written yourself. You can only give a grade if you want.  
Click on the logo to go back home.  

## Authors

Fabio Machado   [Linkedin](https://www.linkedin.com/in/fabio-aires-machado/)

## Version History

* 0.1
    * Initial Release

## License

This project is an opensource, read the CGV of ETNA school Paris.

