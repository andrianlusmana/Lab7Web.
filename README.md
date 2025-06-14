<h1>Praktikum 1: PHP Framework (Codeigniter)</h1>
<img width="959" alt="Screenshot 2025-06-04 210654" src="https://github.com/user-attachments/assets/823899e6-5c84-48e3-a8e3-961e47eab9d6" />
<img width="960" alt="Screenshot 2025-06-04 211127" src="https://github.com/user-attachments/assets/0e6abe7c-c561-4fd4-86db-238e0fa3f781" />
<img width="960" alt="Screenshot 2025-06-04 211239" src="https://github.com/user-attachments/assets/2a327eb7-e975-4e08-bd78-483e5730c9cb" />
<img width="960" alt="Screenshot 2025-06-04 205836" src="https://github.com/user-attachments/assets/b2f6ee66-cdc9-4471-a862-f6f4d6ee8f39" />
<br>
<h1>Praktikum 2: Framework Lanjutan (CRUD)</h1>
<img width="842" alt="Screenshot 2025-06-04 211640" src="https://github.com/user-attachments/assets/12ef269b-ca58-4cdd-828b-37f133b326e7" />
<img width="952" alt="Screenshot 2025-06-04 211819" src="https://github.com/user-attachments/assets/4a30a006-73d6-4590-a72d-1478bc2ca874" />
<img width="664" alt="Screenshot 2025-06-04 212144" src="https://github.com/user-attachments/assets/edf69a37-de76-47fe-8e08-748fc4040d78" />
<img width="672" alt="Screenshot 2025-06-04 212243" src="https://github.com/user-attachments/assets/02f42d36-1576-4249-9cba-5aef2deafd81" />
<img width="960" alt="Screenshot 2025-06-04 205820" src="https://github.com/user-attachments/assets/38e34570-31d4-4f22-9326-8c1d97b85801" />
<img width="707" alt="Screenshot 2025-06-04 212645" src="https://github.com/user-attachments/assets/8f7db224-6d4a-4e70-baf3-4d6c80be6f89" />

![code1](https://github.com/user-attachments/assets/e173d368-9a3b-42e9-86da-de5cba3122c0)

![code](https://github.com/user-attachments/assets/33d5433c-9b20-4067-82b4-b0dfe034b4c5)
<img width="958" alt="Screenshot 2025-06-04 214411" src="https://github.com/user-attachments/assets/fc6d0d3c-a417-4474-8c81-19e744a61b16" />
![code2](https://github.com/user-attachments/assets/c573178b-418a-4341-9c21-d83b64f19c31)
![code3](https://github.com/user-attachments/assets/0dcc6839-bc61-4a64-be2f-1872766fbd67)
<img width="960" alt="Screenshot 2025-06-04 214511" src="https://github.com/user-attachments/assets/c6df4742-9f8b-4f0e-936c-b48826a9b702" />
![code4](https://github.com/user-attachments/assets/cea77c11-9c94-467a-8d07-cd1fbf3a2c0c)
![code5](https://github.com/user-attachments/assets/0f10f159-5603-4cea-83fc-69baa822c5a8)
<img width="960" alt="Screenshot 2025-06-04 214523" src="https://github.com/user-attachments/assets/b76084a1-a328-424d-bbbd-66a895525e79" />
![code6](https://github.com/user-attachments/assets/5296576e-504f-4785-942e-43a3fba0d7f7)
<br>
<h1>Praktikum 3: View Layout dan View Cell</h1>

![code7](https://github.com/user-attachments/assets/1d73c57c-f7a6-463f-9273-1c90a4a680ab)
![code8](https://github.com/user-attachments/assets/4cde83b9-435b-46e8-a12c-d867cd7b07bc)
![code9](https://github.com/user-attachments/assets/38ce64dd-b27b-4c9a-a13b-8856ad7194e4)

![code10](https://github.com/user-attachments/assets/28f29c4e-a31b-4ca9-80c4-d3a2bb427ef4)





# CodeIgniter 4 Framework

## What is CodeIgniter?

CodeIgniter is a PHP full-stack web framework that is light, fast, flexible and secure.
More information can be found at the [official site](https://codeigniter.com).

This repository holds the distributable version of the framework.
It has been built from the
[development repository](https://github.com/codeigniter4/CodeIgniter4).

More information about the plans for version 4 can be found in [CodeIgniter 4](https://forum.codeigniter.com/forumdisplay.php?fid=28) on the forums.

You can read the [user guide](https://codeigniter.com/user_guide/)
corresponding to the latest version of the framework.

## Important Change with index.php

`index.php` is no longer in the root of the project! It has been moved inside the *public* folder,
for better security and separation of components.

This means that you should configure your web server to "point" to your project's *public* folder, and
not to the project root. A better practice would be to configure a virtual host to point there. A poor practice would be to point your web server to the project root and expect to enter *public/...*, as the rest of your logic and the
framework are exposed.

**Please** read the user guide for a better explanation of how CI4 works!

## Repository Management

We use GitHub issues, in our main repository, to track **BUGS** and to track approved **DEVELOPMENT** work packages.
We use our [forum](http://forum.codeigniter.com) to provide SUPPORT and to discuss
FEATURE REQUESTS.

This repository is a "distribution" one, built by our release preparation script.
Problems with it can be raised on our forum, or as issues in the main repository.

## Contributing

We welcome contributions from the community.

Please read the [*Contributing to CodeIgniter*](https://github.com/codeigniter4/CodeIgniter4/blob/develop/CONTRIBUTING.md) section in the development repository.

## Server Requirements

PHP version 8.1 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)

> [!WARNING]
> - The end of life date for PHP 7.4 was November 28, 2022.
> - The end of life date for PHP 8.0 was November 26, 2023.
> - If you are still using PHP 7.4 or 8.0, you should upgrade immediately.
> - The end of life date for PHP 8.1 will be December 31, 2025.

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php) if you plan to use MySQL
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library
