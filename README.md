PHP常用工具类
# StringLetter::first($str)

获取字符串首字符，字母（大小写）直接返回，中文返回拼音的首字母，其它符号返回空
```php
StringLetter::first('我');//小写 w

StringLetter::first('我',true);//大写 W

```
