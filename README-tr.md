VirtLabNet (Sanal Lab Ağı)
================================

Giriş 
-------------------------------
VirtLabNet projesinin amacı kullanıcılara sunucu/yönlendirici/istemci uçları ekleyerek/kaldırarak/düzenleyerek kolaylıkla değiştirebilecekleri bir sanal ağ ortamı sağlamaktır. Bu sanal ağ eğitim amaçlı kullanılabileceği gibi bir uygulamanın, yazılımın veya bir ağ fikrinin test edilmesi için de kullanılabilir.

<b>Geçmiş</b>

Bu projede, KOVAN projesi [1] örnek alınmıştır.


İş Planı
-------------------------------

<h3>Araştırma Aşaması</h3>

* Kullanılacak sanallaştırma teknolojisine karar verilmelidir:
  * Mevcut sanallaştırma teknolojileri (KVM, VirtualBox, jails vb.) araştırılmalıdır.
* KOVAN projesi [1] incelenmelidir.

<h3>Arkaplanın Gerçeklenmesi</h3>

* Sanal makinaların yönetilmesi için altyapının oluşturulması
  * Sanal makinalar: yönlendiriciler, istemciler, sunucular.
* Gereksinimler: Bash, Perl, MySql.

<h3>Önplanın Gerçeklenmesi</h3>

* Yönetim için kullanıcı dostu grafik arabirimi (GUI)
  * Oluşturulmuş topolojinin görsel olarak gösterilmesi.
* Kullanıcı görseli kullanarak topolojiyi değiştirebilmeli. Topoloji kaydedilmeli ve gerçeklenmeli (topolojinin gerçeklenebilir olup olmadığı kontrol edilmeli).
* Gereksinimler: PHP, MySQL, HTML, CSS, javascript.

<h3>Belgeleme & Yaygınlaştırma</h3>

* Kurulum kılavuzu
* Kullanıcı rehberi
* Yaygınlaştırma çalışmaları (konferans bildirileri, sunumlar, sosyal medya vb.)

Kazanılacak Yetenekler
-------------------------------
Aşağıda belirtilen tecrübenin proje sonunda kazanılacağı öngörülmektedir. Bu tecrübelerden bir veya daha fazlasına sahip olmak projenin daha hızlı ilerlemesini sağlayacaktır.

* Linux, BSD bilgisi: Paket/port yönetimi. Kabuk betikleri yazma, komut satırı araçlarına aşina olma.
* Ağ bilgisi: Yönlendirme protokolleri, IPv4/IPv6 adres yönetimi.
* Gerekli programlama dilleri ve veritabanı deneyimi.
* Sanallaştırma teknolojileri ile ilgili genel bilgi.

Referanslar
-------------------------------

[1] KOVAN http://www.ipv6.net.tr/kovan/
