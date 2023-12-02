Implementation of [Bootstrap Icons](https://icons.getbootstrap.com) as Laravel components. 

Icon view components based on Boostrap 5 icons. 

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