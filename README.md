
# PHP Sayı Formatlama

Bu fonksiyon herhangi bir formatta girilen bir sayıyı istenilen formata çevirir. 

Bazı yerlerde büyük sayıları yazarken nokta, virgül karmaşası yaşanabiliyor. (Bazı yerlerde 1.234,5 şeklinde yazılırken bazı yerlerde 1,234.5 şeklinde yazabiliyor).
Hem bunun önüne geçmek için, hem de verilen bir sayının tüm projede istenilen formatta standart şekilde kullanılabilmesi için bu fonksiyonu yazdım.


## Kullanımı

#### Fonksiyona girdiğiniz sayı formatı ne olursa olsun onu istenilen formata çevirir:

```
  formatNumber('1.234,56', 3);
```

```
  Çıktı: 1234.56
```

| Parametre | Tip     | Açıklama                |
| :-------- | :------- | :------------------------- |
| `sayı`      | `string` | Formatlanması istenilen sayı |
| `format` | `integer` | **1**: 1.234,56, **2**: 1,234.56, **3**: 1234.56, **4**: 1234,56 |


  
## Ekler

Sonraki ondalık rakamların sayısını belirlemek için fonksiyonun içinde bulunan **$decimals** değişkeninin karşılığındaki rakamı değiştirmeniz yeterlidir. *(0 yazarsanız ondalık sayılar olmaz.)*
