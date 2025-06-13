# PrestaEdit : DevTools

Work only if your are in Debug mode.

Note : with PrestaShop 9, the debug mode could be isolated with a cookie value. Good to use !

## Modifier : debug

```
{$product|die:true}
```

Params : `die`, to make a die after `dump()`.

## Block : dev

```
{dev}
  This is a test for debugging:
    * {$product.id}
    * {$product.name}
    * {$product.description_short}
{/dev}
```
