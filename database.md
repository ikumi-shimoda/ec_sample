# [商品]
|テーブル物理名|テーブル論理名|
|:--:|:--:|
|商品|products|

|#|PK|UK|カラム論理名|カラム物理名|データ型|桁|NULL|DEFAULT|備考|
|:--:|:--:|:--:|:--:|:--:|:--:|:--:|:--:|:--:|:--:|
|1|○|N/A|商品番号|id|	INT unsigned|N/A|NO|auto_increment||
|2|N/A|N/A|商品名|name|VARCHAR|255|NO|N/A||
|3|N/A|N/A|値段|price|FLOAT|N/A|NO|N/A||
|4|N/A|N/A|商品説明|description|TEXT|N/A|NO|N/A||
|5|N/A|N/A|写真|image|VARCHAR|255|NO|N/A||

***

# [お知らせ]

|テーブル物理名|テーブル論理名|
|:--:|:--:|
|お知らせ|infos|

|#|PK|UK|カラム論理名|カラム物理名|データ型|桁|NULL|DEFAULT|備考|
|:--:|:--:|:--:|:--:|:--:|:--:|:--:|:--:|:--:|:--:|
|1|○|N/A|投稿番号|id|	INT unsigned|N/A|NO|auto_increment||
|2|N/A|N/A|タイトル|title|VARCHAR|255|NO|N/A||
|3|N/A|N/A|内容|contents|TEXT|N/A|NO|N/A||
|4|N/A|N/A|日付|info_time|DATETIME|N/A|NO|N/A||
|5|N/A|N/A|作成日時|created_at|TIMESTAMP|N/A|YES|N/A||
|6|N/A|N/A|編集日時|updated_at|TIMESTAMP|N/A|YES|N/A||
|7|N/A|N/A|削除日時|deleted_at|TIMESTAMP|N/A|YES|N/A||

***

# [キャンペーン一覧]

|テーブル物理名|テーブル論理名|
|:--:|:--:|
||sales|

|#|PK|UK|カラム論理名|カラム物理名|データ型|桁|NULL|DEFAULT|備考|
|:--:|:--:|:--:|:--:|:--:|:--:|:--:|:--:|:--:|:--:|
|1|○|N/A|投稿番号|id|	INT unsigned|N/A|NO|auto_increment||
|2|N/A|N/A|タイトル|title|VARCHAR|255|NO|N/A||
|3|N/A|N/A|内容|contents|TEXT|N/A|NO|N/A||

***

# [春のキャンペーン]
|テーブル物理名|テーブル論理名|
|:--:|:--:|
|春のキャンペーン|spring_sales|

|#|PK|UK|カラム論理名|カラム物理名|データ型|桁|NULL|DEFAULT|備考|
|:--:|:--:|:--:|:--:|:--:|:--:|:--:|:--:|:--:|:--:|
|1|○|N/A|商品番号|id|	INT unsigned|N/A|NO|auto_increment||
|2|N/A|N/A|商品名|name|VARCHAR|255|NO|N/A||
|3|N/A|N/A|値段|price|FLOAT|N/A|NO|N/A||
|4|N/A|N/A|商品説明|description|TEXT|N/A|NO|N/A||
|5|N/A|N/A|セール情報|sale_description|TEXT|N/A|NO|N/A||
|5|N/A|N/A|写真|image|VARCHAR|255|NO|N/A||

***

# [一周年記念キャンペーン]
|テーブル物理名|テーブル論理名|
|:--:|:--:|
|一周年キャンペーンy|one_year_sales|

|#|PK|UK|カラム論理名|カラム物理名|データ型|桁|NULL|DEFAULT|備考|
|:--:|:--:|:--:|:--:|:--:|:--:|:--:|:--:|:--:|:--:|
|1|○|N/A|商品番号|id|	INT unsigned|N/A|NO|auto_increment||
|2|N/A|N/A|商品名|name|VARCHAR|255|NO|N/A||
|3|N/A|N/A|値段|price|FLOAT|N/A|NO|N/A||
|4|N/A|N/A|商品説明|description|TEXT|N/A|NO|N/A||
|5|N/A|N/A|セール情報|sale_description|TEXT|N/A|NO|N/A||
|5|N/A|N/A|写真|image|VARCHAR|255|NO|N/A||

***
