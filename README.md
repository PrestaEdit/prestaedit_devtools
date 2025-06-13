# PrestaEdit : DevTools

Work only if your are in Debug mode.

> [!TIP]
> PrestaShop 9 allows you to set [debug mode](https://www.prestashop-project.org/releases/prestashop90/#developer-features) with a cookie value.

## Modifier : debug

```
{$product|die:true}
```

### Params

`die`, to make a die after `dump()`.

<img src="https://github.com/PrestaEdit/prestaedit_devtools/blob/ac677e3871b3ebb2b6c1be697c54989ea1f0d3da/assets/img/readme_01.png"/>

## Block : dev

```
{dev}
  This is a test for debugging:
    * {$product.id}
    * {$product.name}
    * {$product.description_short}
{/dev}
```


  <img src="https://github.com/PrestaEdit/prestaedit_devtools/blob/ac677e3871b3ebb2b6c1be697c54989ea1f0d3da/assets/img/readme_02.png"/>
