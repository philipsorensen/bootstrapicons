Implementation of [Bootstrap Icons](https://icons.getbootstrap.com) as Laravel components. Add beautiful icons to your Laravel projects with customizable colors, sizes and classes. 

## Installation

> composer require philipsorensen/bootstrapicons

Add the following in your `config/app.php` under providers. 

```
PhilipSorensen\BootstrapIcons\Providers\BootstrapIconsProvider::class
```

## Usage
Here are some examples of how to use it: 

> <x-bootstrapicons::trash />

> <x-bootstrapicons::trash class="me-2" color="red" size="40" />