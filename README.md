<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## How to run this application

The second part of the program (map api) is located in:  https://github.com/navintanzim/aco-map-api.

<b> YOU MUST HAVE BOTH PARTS OF THE PROGRAM RUNNING TO PROPERLY USE THIS SYSTEM.</b>

To run the map api part, run the command: "php yii serve" in your shell.

A user has to register himself with his name, email and password to access the system. The dashboard page was designed to have only 2 menus; the dashboard itself and the map api. A user could also check his profile by clicking on the ribbon on the top right corner of the screen. He could edit his profile, change his password, log out or even delete his account from there. The map option was designed to take a user to a page with an input form. The input could accept image files and send it to the api part of the system. Once an image file was selected, a user would press the upload button. The interface would then send that image file to the API and also keep a copy of the file in its own storage. After the file is saved on the map api, the interface would automatically redirect itself to the path finding system. Once on the system, a user can check his previously uploaded maps on a list. The maps can be deleted if deemed unnecessary. New image files can also be directly uploaded by an input system on the right side of the page. The users can go back to the interface by clicking on the option “Go back to Main Page”. It would take them back to the dashboard page.

The users can select a map from the stored files and specify how nodes would be detected on the image. If a user selects the option to specify the colour of the nodes, three additional input boxes would appear. They would take the RGB value of the colour the nodes are expected to represent. Once that is specified, clicking on the button “Build a path” would activate the algorithm and generate an optimal route through the nodes.

A demo video showing the whole process is given at the file: demo video.wmv in the root directory (https://github.com/navintanzim/acov2/blob/main/demo%20video.wmv)

Built by Mashrure Tanzim

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
