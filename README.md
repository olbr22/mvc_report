A webbsite created for educational purposes in particular for the mvc course. This webbsite contains reports on each course moment (kmom), 1 to 6 including examination project. The examination project idea is to visualize sustainability indicators using Chart.js library for data visualization.

The Scrutinazer badges showing the status of the code:

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/olbr22/mvc_report/badges/quality-score.png?b=main)](https://scrutinizer-ci.com/g/olbr22/mvc_report/?branch=main)
[![Code Coverage](https://scrutinizer-ci.com/g/olbr22/mvc_report/badges/coverage.png?b=main)](https://scrutinizer-ci.com/g/olbr22/mvc_report/?branch=main)
[![Build Status](https://scrutinizer-ci.com/g/olbr22/mvc_report/badges/build.png?b=main)](https://scrutinizer-ci.com/g/olbr22/mvc_report/build-status/main)
[![Code Intelligence Status](https://scrutinizer-ci.com/g/olbr22/mvc_report/badges/code-intelligence.svg?b=main)](https://scrutinizer-ci.com/code-intelligence)

Here's how you can clone and set up the project:

Step 1: Clone the GitHub Repository

    1.1. Open your terminal (or command prompt) on your computer.
    1.2. Navigate to the directory where you want to clone your project. Use the cd command to change directories.
    1.3. Run the following command to clone the repository from GitHub:
        `git clone https://github.com/olbr22/mvc_report.git`

Step 2: Setup Symfony Project

    2.1. Navigate into the cloned directory.
    2.2. Install Composer Dependencies:
        `composer install`
    2.3. Install Node.js Dependencies:
        `npm install`
    2.4. Build Frontend Assets:
        `npm run build`

Step 3: Open the PHP built-in web server to verify the installation

    3.1. Make sure you are in the cloned directory
    3.2. Run the following command to run the PHP built.in web server
        `php -S localhost:8888 -t public`