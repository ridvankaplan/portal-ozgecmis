# Özgeçmiş Modülü

## Kurulum

============

- Admin paneli: http://portal.kouosl/admin/ozgecmis<br>
- Kullanıcı paneli: http://portal.kouosl/ozgecmis

Portal özgeçmiş modülünü, portal web uygulamasına eklemek için /portal dizininde bulunan composer.json dosyasına, aşağıdaki kod parçaları repositories ve require kısımlarına eklenir. Portal dizininde composer update işlemi yapılarak modül yüklenir.

```bash
....
"repositories": [
    {
        ....
        {
            "type": "vcs",
            "url": "https://github.com/ridvankaplan/portal-ozgecmis.git"
        }
],
"require": {
     
    ....   
    "kouosl/portal-ozgecmis": "dev-master"
},
....
```

Modülün yüklenmesinin ardından kullanıcı ve yönetici panellerinin çalışması için gerekli olan veritabanı tabloları, modülün migrations klasörü içerisinde bulunmaktadır. Migrate işlemi için altta bulunan kod parçasının portal dizininde çalıştırılması gerekmektedir.

```bash
$php yii migrate --migrationPath=@vendor/kouosl/portal-ozgecmis/migrations --interactive=0
```


## Notlar

- Kullanıcı paneli açıldığında kayıtlı özgeçmişleri listelemek için bir yönlendirme bulunmaktadır. 
- Özgeçmişler listelendiğinde seçilen özgeçmiş ayrıntılı olarak görüntülenebilir.
- Kullanıcı panelinde ayrıca yeni özgeçmiş oluşturulabilir.
- Yönetici paneli açıldığında kayıtlı özgeçmişleri listelemek için bir yönlendirme bulunmaktadır. 
- Yönetici panelinde ise kayıtlı özgeçmişleri listeleme, silme veya oluşturma işlemleri yapılabilir.


