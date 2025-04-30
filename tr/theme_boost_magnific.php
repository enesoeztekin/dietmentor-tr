<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'theme_boost_magnific', language 'tr', version '4.5'.
 *
 * @package     theme_boost_magnific
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['background_color'] = 'Arka Plan Rengi';
$string['background_color_desc'] = 'Üst ve Altbilgi arka plan rengi!';
$string['background_color_random'] = 'Rastgele Tema {$a}';
$string['background_text_color'] = 'Metin Rengi';
$string['background_text_color_desc'] = 'Üst ve Altbilgi Metin Rengi!';
$string['choosereadme'] = 'Boost Magnific, Moodle\'e neşeli renkler getirmek için özenle hazırlanmış bir tema.';
$string['contact_address'] = 'Adres';
$string['contact_email'] = 'E-posta';
$string['contact_phone'] = 'Telefon Numarası';
$string['content_type_default'] = 'Moodle varsayılanı';
$string['content_type_empty'] = '(İçerik Yok)';
$string['content_type_footer'] = 'Altbilgi İçeriği Türü';
$string['content_type_footer_desc'] = 'Altbilgide göstermek istediğiniz içeriğin türünü seçin.';
$string['content_type_home'] = 'Ana Sayfa İçeriği Türü';
$string['content_type_home_desc'] = 'Ana sayfada göstermek istediğiniz içeriğin türünü seçin.';
$string['content_type_html'] = 'Editör ile oluşturulacak sayfa';
$string['continuar'] = 'Çalışmaya Devam Et';
$string['countlesson'] = '{$a} ders';
$string['countlessons'] = '{$a} dersler';
$string['course_access'] = 'Kursa Erişim';
$string['course_moore'] = 'Daha fazla bilgi';
$string['customcss'] = 'Özel CSS';
$string['customcss_desc'] = 'Bu metin alanına eklediğiniz herhangi bir CSS kuralı, bu temayı özelleştirmeyi kolaylaştırmak için tüm sayfalara yansıtılacaktır.';
$string['custommenuitems'] = 'Özel Üst Menü Öğeleri';
$string['custommenuitems_desc'] = 'Üst menülerin yanında özel bir menü oluşturabilirsiniz. Kök menü kenarla hizalanmalı ve alt menüler tire (-) ile öncelenmelidir. Tire sayısı öğe derinliğini belirler. Böylece, tek tireli öğeler bir önceki üst düzey öğenin alt menüsünde görünürken, iki tireli öğeler bir önceki alt menünün alt menüsünde görünür.
Her menü öğesinin içeriği, "<strong>etiket</strong> | <strong>url</strong> | <strong>açıklama</strong> | <strong>dil</strong>" olmak üzere en fazla üç öğeden oluşmalıdır ve her biri "|" karakteri ile ayrılmalıdır.
<ul>
<li><strong>etiket</strong>: Menü öğesinin içinde görüntülenecek metin budur. Her menü öğesi için bir etiket belirtmelisiniz.</li>
<li><strong>url</strong>: Kullanıcıyı tıkladığında yönlendirilecek URL\'dir. Bu isteğe bağlıdır; sağlanmazsa, öğe hiçbir yere bağlı olmaz.<br>
"target" gibi diğer özellikler URL\'nin sonuna eklenebilir.</li>
<li><strong>açıklama</strong>: URL sağlarsanız, URL ile oluşturulan bağlantı için bir açıklama da sağlayabilirsiniz. Bu isteğe bağlıdır ve tanımlanmazsa, etiket menü öğesi için açıklama olarak kullanılır.</li>
<li><strong>dil</strong>: Satırın dördüncü öğesi olarak bir dil kodu (veya virgülle ayrılmış bir dil kodu listesi) ekleyebilirsiniz. Satır, kullanıcı belirtilen dil(ler)i seçtiğinde yalnızca görüntülenir.</li>
</ul>
Aşağıda özel bir menü oluşturmanın bir örneği bulunmaktadır:
<blockquote><pre>
Kurslar
-Tüm kurslar | /kurs/
-Benim kurslarım
--Örnek Kurs
---Örnek Kurs 7 | /kurs/göster.php?id=7
---Örnek Kurs 9 | /kurs/göster.php?id=9
--Test Kursu
---Test Kursu 2 | /kurs/göster.php?id=2
---Test Kursu 5 | /kurs/göster.php?id=5
Google
-Herhangi bir dilde Google | https://google.com.tr/" target="_blank
-Meksika\'da Google | https://www.google.com.mx/" target="_blank|Google Etiketi|en
-Portekizce\'de Google | https://google.com.br/" target="_blank|Google Etiketi|pt,pt_br,pt_br_kids
Destek Sayfası | https://destek.com/" target="_blank
</pre></blockquote>
Birden fazla dil desteği ile Moodle için, <strong>etiket</strong> değeri <strong>"diladı,bileşenadı"</strong> biçiminde biçimlendirilmelidir.
<blockquote><pre>
profil,moodle | /kullanıcı/profil.php
mesajlar,mesaj | /mesaj/index.php
</pre></blockquote>
<a href="https://docs.moodle.org/404/tr/Gelişmiş_tema_ayarları" target="_blank">Daha fazla menü bilgisi</a>';
$string['editor_link_footer'] = '{$a} dil için altbilgi bloğunu düzenleyin';
$string['editor_link_footer_all'] = 'Tüm diller için altbilgi bloğunu düzenleyin';
$string['editor_link_home'] = '{$a} dil için ana sayfayı düzenleyin';
$string['editor_link_home_all'] = 'Tüm diller için ana sayfayı düzenleyin';
$string['favicon'] = 'Favicon';
$string['favicon_desc'] = 'Favicon, tarayıcı sekmesinde sayfa başlığının yanında görüntülenir. Özel bir favicon sağlanmazsa Moodle faviconu görüntülenir.';
$string['fontfamily'] = 'Site Metin Yazı Tipleri';
$string['fontfamily_desc'] = 'Moodle sitenizde metinler için kullanmak istediğiniz yazı tipini seçin.';
$string['fontfamily_menus'] = 'Menü Yazı tipleri';
$string['fontfamily_menus_desc'] = 'Moodle sitenizde menüler için kullanmak istediğiniz yazı tipini seçin.';
$string['fontfamily_sitename'] = 'Site adı için yazı tipi';
$string['fontfamily_sitename_desc'] = 'Eğer bir logo sağlanmamışsa, site adına uygulanacak yazı tipi.';
$string['fontfamily_title'] = 'Başlık Metni Yazı Tipleri';
$string['fontfamily_title_desc'] = 'Moodle sitenizde başlıklar için kullanmak istediğiniz yazı tipini seçin.';
$string['fontpreview'] = 'Yazı Tipi Önizlemesi';
$string['footer_contact_title'] = 'İletişim Blok Başlığı';
$string['footer_contact_title_default'] = 'Bize Ulaşın';
$string['footer_contact_title_desc'] = 'İletişim bilgilerinin altbilgide görüneceği bloğun başlığını girin.';
$string['footer_description'] = 'Açıklama';
$string['footer_description_desc'] = 'Moodle\'ınızı, ne yaptığınızı açıklayın ve bu bilgiler Moodle altbilgisinde logonun altında gösterilecektir.';
$string['footer_frontpage_blockcourses_instructor'] = 'Profesörün adını göster';
$string['footer_frontpage_blockcourses_instructor_desc'] = 'İşaretlenirse, ders listesinde profesörlerin adlarını gösterir!';
$string['footer_frontpage_blockcourses_text'] = '"{$a}" bloğunu açıklayan kısa metin';
$string['footer_frontpage_blockcourses_text_desc'] = '"{$a}" hakkında konuşan bir metin ekleyin!';
$string['footer_links_title'] = 'Bağlantılar Blok Başlığı';
$string['footer_links_title_default'] = 'Önemli Bağlantılar';
$string['footer_show_copywriter'] = '❤️ ile yapıldı göster';
$string['footer_show_copywriter_desc'] = '❤️ ile yapıldıyı gizlemek istiyorsanız işareti kaldırın';
$string['footer_social_title'] = 'Sosyal Bağlantılar Blok Başlığı';
$string['footer_social_title_default'] = 'Bizi sosyal medyada takip edin';
$string['footer_social_title_desc'] = 'Sosyal ağlarınızdan gelen verilerle alt bilgiye görünecek bloğun başlığını girin.';
$string['footerblink'] = 'Alt Bilgi Blok Bağlantıları';
$string['footerblink_desc'] = 'Burada bir Alt Bilgi Blok Bağlantıları yapılandırabilirsiniz ki temalar tarafından gösterilsin.<br>Her satır, bazı menü metni veya dil anahtarı veya metin, bir bağlantı URL\'si (isteğe bağlı) ile dikey çubuklarla ayrılmıştır. Örneğin:<br><pre>Moodle Destek|https://moodle.org/support</pre>';
$string['footerblock_contact'] = 'İletişim bloğu';
$string['footerblock_copywriter'] = '❤️ ile yapıldı';
$string['footerblock_description'] = 'Açıklama bloğu';
$string['footerblock_links'] = 'Bağlantılar bloğu';
$string['footerblock_social'] = 'Sosyal blok';
$string['free_name'] = 'Ücretsiz';
$string['frontpage_about_description'] = 'Ne yaptığınızı açıklayın';
$string['frontpage_about_description_desc'] = 'Moodle\'ınızın amacını en fazla 5 satırda açıklayın';
$string['frontpage_about_enable'] = 'Hakkında bloğunu etkinleştir';
$string['frontpage_about_enable_desc'] = 'İşaretlenirse, Hakkında Bloğu, Banner\'ın altında görünecektir!';
$string['frontpage_about_info'] = 'Veri kutusu {$a}';
$string['frontpage_about_logo'] = 'Burada farklı bir logo gösterilecek';
$string['frontpage_about_logo_desc'] = 'Eğer ayarlandıysa, burada Üst Logosu yerine bu logo kullanılacaktır.<br>Boş bırakıldığında Üst Logosu kullanılır!';
$string['frontpage_about_number'] = 'Veri miktarı';
$string['frontpage_about_number_desc'] = 'Yukarıda bahsedilen bilgi miktarını girin';
$string['frontpage_about_text'] = 'Veri adı';
$string['frontpage_about_text_1_defalt'] = 'Kurslar';
$string['frontpage_about_text_2_defalt'] = 'Öğretmenler';
$string['frontpage_about_text_3_defalt'] = 'Öğrenciler';
$string['frontpage_about_text_4_defalt'] = 'Dersler';
$string['frontpage_about_text_desc'] = 'Ana sayfada gösterilecek verinin adını girin';
$string['frontpage_about_title'] = 'Hakkında bloğu başlığı';
$string['frontpage_about_title_default'] = 'Küresel Topluluğumuz';
$string['heart'] = 'Bu temayı beğendiyseniz, temalar sayfasında ❤️\'a tıklamayı unutmayın <a href="{$a}" target="_blank">buraya tıklayarak</a>';
$string['instructor'] = 'Eğitmen';
$string['login_backgroundcolor'] = 'Arka Plan Rengi';
$string['login_backgroundcolor_desc'] = 'Şifre kurtarma sayfasının arka plan rengini seçin';
$string['login_backgroundfoto'] = 'Arka Plan Resmi';
$string['login_backgroundfoto_desc'] = 'Giriş/Şifre Kurtarma/Hesap Oluşturma ekranı için arka plan resmini seçin. Varsayılan resim: {$a}';
$string['login_forgot_description'] = 'Şifre Unuttum Ekranının Yanındaki Metin';
$string['login_forgot_description_desc'] = 'Sadece Şifre Unuttum ekranında görünecek metin';
$string['login_login_description'] = 'Giriş Ekranının Yanındaki Metin';
$string['login_login_description_desc'] = 'Sadece Giriş ekranında görünecek metin';
$string['login_signup_description'] = 'Hesap Oluşturma Ekranının Yanındaki Metin';
$string['login_signup_description_desc'] = 'Sadece Hesap Oluşturma ekranında görünecek metin';
$string['login_theme'] = 'Giriş Teması';
$string['login_theme_block'] = 'Arka planlı merkezi beyaz blok';
$string['login_theme_desc'] = 'Giriş alanında hangi temayı kullanmak istediğinizi seçin';
$string['login_theme_image_login'] = 'Arka plan resmi ve yan tarafta giriş';
$string['login_theme_imagetext_login'] = 'Arka plan resmi, resim üzerinde metin ve yan tarafta giriş';
$string['login_theme_login'] = 'Sadece giriş ekranı, yan resim yok';
$string['logo_color'] = 'Renkli Logo';
$string['logo_color_desc'] = 'Eğer üstte renkli bir LOGO göstermek istiyorsanız, lütfen yükleyin. Bu logo sayfa kaydırıldığında gösterilecek ve menü beyaz arka planda görünecektir.';
$string['logo_write'] = 'Kaydırarak üst menü logosu';
$string['logo_write_desc'] = 'Lütfen logonuzu üst kısıma eklemek istiyorsanız yükleyin. Bu logo, kaydırma üstte kaldığında gösterilecek ve menü renkli bir arka plan üzerinde görüntülenecektir.';
$string['matricular'] = 'Kayıt Ol';
$string['mycourses_color'] = 'Blok Arka Plan Rengi';
$string['mycourses_color_desc'] = 'Blok için arka plan rengi.';
$string['mycourses_icon'] = 'Simge';
$string['mycourses_icon_desc'] = 'Blok için temsil edici bir simge. Simge boyutu 48x48 piksel olmalıdır.';
$string['mycourses_info'] = 'Blok {$a}';
$string['mycourses_numblocos'] = 'Blok yok';
$string['mycourses_numblocos_desc'] = 'Slayt Gösterisinde kaç resim istiyorsunuz?';
$string['mycourses_numblocos_nenhum'] = 'Ana sayfada slayt yok';
$string['mycourses_title'] = 'Kısa Blok Başlığı';
$string['mycourses_title_desc'] = 'Blok için kısa ve açıklayıcı bir başlık.';
$string['mycourses_url'] = 'Blok Bağlantısı';
$string['mycourses_url_desc'] = 'Bloka tıklandığında gidilecek URL. Harici bir bağlantı veya platform içindeki dahili bir bağlantı olabilir.';
$string['pluginname'] = 'Boost Magnific';
$string['settings_footer_heading'] = 'Altbilgi Bloğu';
$string['settings_icons_change_icons'] = 'Ders listesinde varsayılan simgeyi değiştir';
$string['settings_login_heading'] = 'Giriş Ekranı';
$string['settings_mycourses_heading'] = 'Benim Kurslarım Blokları';
$string['settings_slideshow_heading'] = 'Slayt Gösterisi';
$string['settings_theme_heading'] = 'Tema';
$string['settings_top_heading'] = 'Üst Menü';
$string['sitefonts'] = 'Ek Google Yazı Tipleri';
$string['sitefonts_desc'] = 'Aşağıdaki resimde belirtildiği gibi Google Fonts\'tan @import kodunu ekleyin. Kaydettikten sonra, "Site Yazı Tipi" alanı güncellenerek bu yazı tiplerini gösterecektir. Gerektiğinde birden fazla @import ekleyebilirsiniz.';
$string['slidecaption_desc'] = 'Slaytta kullanılacak başlık metnini girin';
$string['slideshow_image'] = 'Slayt Resmi';
$string['slideshow_image_desc'] = 'Resim 1250px X 400px olmalıdır.';
$string['slideshow_info'] = 'Slayt {$a}';
$string['slideshow_numslides'] = 'Slayt Gösterisinde kaç resim var';
$string['slideshow_numslides_desc'] = 'Slayt Gösterisinde kaç resim istediğinizi seçin?';
$string['slideshow_numslides_nenhum'] = 'Ana sayfada slayt yok';
$string['slideshow_text'] = 'Slayt için kısa açıklayıcı metin';
$string['slideshow_text_desc'] = 'Slayt hakkında kısa bir metin girin.';
$string['slideshow_url'] = 'Slayt düğmesi bağlantısı';
$string['slideshow_url_desc'] = 'Slayt resim düğmesi için hedef bağlantıyı ekleyin';
$string['social_facebook'] = 'Facebook Hesabınız';
$string['social_twitter'] = 'Twitter Hesabınız';
$string['social_youtube_desc'] = 'Kuruluşunuzun Youtube URL\'si.';
$string['theme_boost_magnific_frontpage_home'] = 'Ana Sayfa Blokları';
$string['theme_boost_magnific_mycourses_editbooton'] = 'Blokları Düzenle';
$string['theme_color_heading'] = 'Ortam Renk Seçimi';
$string['vvveb_home_access'] = 'Kursa Erişim';
$string['vvveb_home_automatically_my_course'] = 'Düzenleme yapmayın. Bu blok otomatik olarak öğrencinin kayıtlı olduğu kurslarla değiştirilecektir.';
$string['vvveb_home_mycourses_heading'] = 'Kurslarım';
$string['vvveb_home_popular_course'] = 'Popüler Kurslar';
$string['vvveb_home_team_subtitle'] = 'İşlerine adanmış bir grup profesyoneliz';
$string['vvveb_home_team_title'] = 'Ekibimizle Tanışın';
