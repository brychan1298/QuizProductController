# Web Programming Quiz Controller : Session 5
Name : Brychan Artanto

NIM : 2502041110

Class : PPTI 12

Subject : Web Programming

Lecturer : Anderies, B.Eng., S.Kom., M.Kom.

**Bina Nusantara University x PPTI BCA**

## My Controller Quiz
Hi, my name is Brychan Artanto. I created a website that contains several products and has its own rarity as a fulfillment for the Web Programming Session 5 quiz.

## About My Website
Technology used in my website are:

- Laravel Framework
- HTML
- CSS
- Bootstrap Framework
 

## How to download this project and open it from your device
To open my profile website from your own device, you can download this repository to your folder, then run the project from your device. Remember, that i built this project using **Laravel framework** so make sure you already have **PHP** and **Composer** installed on your device (You can see how to install Composer and Laravel on your device [here](https://laravel.com/docs/10.x/installation). But for now you only need to ensure that your local device has PHP and Composer Installed).

You also need to install Node.Js so that you can use the NPM Package. You can install Node.JS from [here](https://nodejs.org/en/download)

Now, you can follow this step to download my repository and run the project on your device.
1. Open [my-profile-exercise](https://github.com/brychan1298/QuizProductController) repository and download the ZIP file.  
2. Then extract the ZIP and open the project in IDE (You can use Visual Studio Code to make it easier). 
3. Then open a terminal that points to the directory folder. 
4. We need to configure the environment so that the Laravel project can run. The first thing we have to do is copy the .env.example file to an .env file so that the current Laravel project has its own environment. 
The method is as follows. In the Visual Studio Code terminal, type the command:
    `copy .env.example .env`
	or if you are using Linux, type
	`cp .env.example .env`
	then press "Enter"
5. Next, you also need to install all the packages that I use in this project. In Terminal, type command
`composer install` then "Enter"
6. After that, run the command `php artisan key:generate` 
7. In making this website, I used a package that comes from NPM. so, in order for this project to run, you need to install the NPM packages that I use. It's easy, just run the command below:
`npm install`
then
`npm run build`
8. Now, the project that you downloaded already has all the packages and environment needed to run my website profile.
9. The last step you need to do is just type the command
`php artisan serve` then "Enter"  (in future, you just need to run this command to open my laravel website). Open by copy the given address and open it from your browser.

10. Now, you can already open my website in your own browser.

## My Product Website
There are 2 pages on this website which consist of a page that contains all available products and a page that contains details of the product being choosed.

- Products Page
At this page you can see several items that exist in my website. Existing products are divided into 3 Rarity:
R - Rare - Silver
SR - Super Rare - Gold
SSR - Supe Super Rare - Red
![Products](https://github.com/brychan1298/QuizProductController/blob/main/Products.png)

- Detail Products Page
When you choose a product on the website. You will go to the product detail page of the product you selected.
![Detail Products](https://github.com/brychan1298/QuizProductController/blob/main/Detail%20Product.png)


## Yield Template
On my current website, there is a main page called head.blade.php as the main template. On this website there is a yield on 'title', 'meta description', and 'content'
![Yield](https://github.com/brychan1298/QuizProductController/blob/main/Yield.png)
