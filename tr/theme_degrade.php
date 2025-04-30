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
 * Strings for component 'theme_degrade', language 'tr', version '4.5'.
 *
 * @package     theme_degrade
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['background_color'] = 'Arka Plan Rengi';
$string['background_color_black'] = 'Siyah Tema {$a}';
$string['background_color_blue'] = 'Mavi Tema {$a}';
$string['background_color_default'] = 'Varsayılan Tema {$a}';
$string['background_color_desc'] = 'Üst ve Alt Bilgi arka plan rengi!';
$string['background_color_green'] = 'Yeşil Tema {$a}';
$string['background_color_random'] = 'Rastgele Tema {$a}';
$string['background_color_red'] = 'Kırmızı Tema {$a}';
$string['choosereadme'] = 'Degrade, Moodle\'a neşeli renkler katmak için özenle hazırlanmış bir temadır.';
$string['contact_address'] = 'Adres';
$string['contact_email'] = 'Eposta';
$string['contact_phone'] = 'Telefon Numarası';
$string['content_pagefonts'] = 'Google Extra Fontlar';
$string['content_pagefonts_desc'] = 'lave yazı tipleri için buraya Google\'ın @import bağlantısını ekleyin.<br>Birden fazla içe aktarma işlemi yapabilirsiniz.<br><a href="https://fonts.google.com/selection/embed" target="google">Göm kod</a><br><img src="{$a}" style="max-width: 100%;width: 420px;">';
$string['content_type_default'] = 'Moodle varsayılanı';
$string['content_type_empty'] = '(İçerik yok)';
$string['content_type_footer'] = 'Altbilgi için içerik türü';
$string['content_type_footer_desc'] = 'Altbilgide görüntülemek istediğiniz içerik türünü seçin.';
$string['content_type_home'] = 'Ana sayfa için içerik türü';
$string['content_type_home_desc'] = 'Ana sayfada görüntülemek istediğiniz içerik türünü seçin.';
$string['content_type_html'] = 'Editör ile oluşturulacak sayfa';
$string['continuar'] = 'Çalışmaya devam et';
$string['countlesson'] = '{$a} ders';
$string['countlessons'] = '{$a} ders';
$string['customcss'] = 'Özel CSS';
$string['customcss_desc'] = 'Bu metin alanına eklediğiniz tüm CSS kuralları tüm sayfalara yansıtılacak ve bu temayı özelleştirmeyi kolaylaştıracaktır.';
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
$string['editor_link_footer'] = '{$a} dili için alt bilgi bloğunu düzenleyin';
$string['editor_link_footer_all'] = 'Tüm diller için alt bilgi bloğunu düzenleyin';
$string['editor_link_home'] = '{$a} dili için ana sayfayı düzenleyin';
$string['editor_link_home_all'] = 'Ana sayfayı tüm diller için düzenleyin';
$string['favicon'] = 'Site simgesi';
$string['favicon_desc'] = 'Favicon, tarayıcı sekmesinde sayfa başlığının yanında görüntülenir. Özel bir sık kullanılan simgesi sağlanmazsa bir Moodle sık kullanılan simgesi görüntülenir.';
$string['fontfamily'] = 'Site Metin Yazı Tipleri';
$string['fontfamily_desc'] = 'Moodle sitenizdeki metin için hangi yazı tipini kullanmak istediğinizi seçin.';
$string['fontfamily_menus'] = 'Menü Yazı Tipleri';
$string['fontfamily_menus_desc'] = 'Moodle sitenizdeki menüler için hangi yazı tipini kullanmak istediğinizi seçin.';
$string['fontfamily_sitename'] = 'Site adı için yazı tipi';
$string['fontfamily_sitename_desc'] = 'Logo sağlanmadığı takdirde site adına uygulanacak yazı tipi.';
$string['fontfamily_title'] = 'Başlık Metni Yazı Tipleri';
$string['fontfamily_title_desc'] = 'Moodle sitenizdeki başlıklar için hangi yazı tipini kullanmak istediğinizi seçin.';
$string['fontpreview'] = 'Yazı Tipi Listesi Önizlemesi';
$string['footer_contact_title'] = 'İletişim Blok Başlığı';
$string['footer_contact_title_default'] = 'Bize ulaşın';
$string['footer_contact_title_desc'] = 'Açıklama';
$string['footer_description'] = 'Açıklama';
$string['footer_description_desc'] = 'Moodle\'ınızı ve ne yaptığınızı açıklayın; bu bilgi Moodle altbilgisindeki logonun altında gösterilecektir.';
$string['footer_frontpage_blockcourses_instructor'] = 'Profesörün adını göster';
$string['footer_frontpage_blockcourses_instructor_desc'] = 'İşaretlenirse ders listesindeki profesörlerin adlarını gösterir!';
$string['footer_frontpage_blockcourses_text'] = '"{$a}" bloğunu açıklayan kısa metin';
$string['footer_frontpage_blockcourses_text_desc'] = '"{$a}" hakkında konuşan bir metin ekleyin!';
$string['footer_links_title'] = 'Bağlantılar Blok Başlığı';
$string['footer_links_title_default'] = 'Önemli Bağlantılar';
$string['footer_show_copywriter'] = '❤️ ile yapılan gösteri';
$string['footer_show_copywriter_desc'] = '"Made with ❤️" seçeneğini gizlemek istiyorsanız işareti kaldırın.';
$string['footer_social_title'] = 'Sosyal Bağlantılar Blok Başlığı';
$string['footer_social_title_default'] = 'Bizi sosyal medyada takip edin';
$string['footer_social_title_desc'] = 'Altbilgide görünecek bloğun başlığını sosyal ağlarınızdan gelen verilerle girin.';
$string['footerblink'] = 'Alt Bilgi Blok Bağlantıları';
$string['footerblink_desc'] = 'Burada temalara göre gösterilecek bir Alt Bilgi Bloğu Bağlantıları yapılandırabilirsiniz.<br>Her satır, dikey çubuklarla ayrılmış bir menü metni veya dil anahtarı veya metninden, bir bağlantı URL\'sinden (isteğe bağlı) oluşur. Örneğin:<br><pre>Moodle Desteği|https://moodle.org/support</pre>';
$string['footerblock_contact'] = 'İletişim bloğu';
$string['footerblock_copywriter'] = '❤️ ile yapıldı';
$string['footerblock_description'] = 'Açıklama bloğu';
$string['footerblock_links'] = 'Bağlantılar bloğu';
$string['footerblock_social'] = 'Sosyal blok';
$string['free_name'] = 'Ücretsiz';
$string['frontpage_about_description'] = 'Ne yaptığınızı açıklayın';
$string['frontpage_about_description_desc'] = 'Moodle\'ınızın amacını en fazla 5 satırla açıklayın';
$string['frontpage_about_enable'] = 'Hakkında bloğunu etkinleştir';
$string['frontpage_about_enable_desc'] = 'İşaretlenirse Banner\'ın altında Hakkında Bloğu görünecektir!';
$string['frontpage_about_info'] = 'Veri kutusu {$a}';
$string['frontpage_about_logo'] = 'Burada gösterilecek farklı logo';
$string['frontpage_about_logo_desc'] = 'Ayarlanırsa, bu logo burada Üst logo yerine kullanılacaktır.<br> Boş, Üst Logoyu kullanır!';
$string['frontpage_about_number'] = 'Veri miktarı';
$string['frontpage_about_number_desc'] = 'Yukarıda belirtilen bilgi miktarını girin';
$string['frontpage_about_text'] = 'Veri adı';
$string['frontpage_about_text_1_defalt'] = 'Kurslar';
$string['frontpage_about_text_2_defalt'] = 'Öğretmenler';
$string['frontpage_about_text_3_defalt'] = 'Öğrenciler';
$string['frontpage_about_text_4_defalt'] = 'Dersler';
$string['frontpage_about_text_desc'] = 'Ana sayfada gösterilecek verinin adını girin';
$string['frontpage_about_title'] = 'Blok başlığı hakkında';
$string['frontpage_about_title_default'] = 'Küresel Topluluğumuz';
$string['heart'] = 'Bu temayı beğendiyseniz <a href="{$a}" target="_blank">burayı tıklayarak</a> temalar sayfasındaki ❤️ işaretine tıklamayı unutmayın.';
$string['instructor'] = 'Öğreten';
$string['login_backgroundcolor'] = 'Arkaplan Rengi';
$string['login_backgroundcolor_desc'] = 'Şifre kurtarma sayfasının arka plan rengini seçin';
$string['login_backgroundfoto'] = 'Arka Plan Resmi';
$string['login_backgroundfoto_desc'] = 'Oturum Açma/Şifre Kurtarma/Hesap Oluştur arka plan resmini seçin. Varsayılan resim: {$a}';
$string['login_forgot_description'] = 'Şifremi Unuttum Ekranının yan tarafındaki metin';
$string['login_forgot_description_desc'] = 'Yalnızca Şifremi Unuttum ekranında görünecek metin';
$string['login_login_description'] = 'Giriş Ekranının yan tarafındaki metin';
$string['login_login_description_desc'] = 'Yalnızca Giriş ekranında görünecek metin';
$string['login_signup_description'] = 'Hesap Oluşturma Ekranının yan tarafındaki metin';
$string['login_signup_description_desc'] = 'Yalnızca Hesap Oluşturma ekranında görünecek metin';
$string['login_theme'] = 'Giriş teması';
$string['login_theme_block'] = 'Giriş alanında istediğiniz temayı seçin';
$string['login_theme_desc'] = 'Giriş alanında istediğiniz temayı seçin';
$string['login_theme_image_login'] = 'Arka plan resmi ve yandaki giriş';
$string['login_theme_imagetext_login'] = 'Arka plan görüntüsü, görüntünün üzerinde metin ve yan tarafta oturum açma';
$string['login_theme_login'] = 'Yalnızca giriş ekranı, yan görüntü yok';
$string['logo_color'] = 'Renkli Logo';
$string['logo_color_desc'] = 'En üstte yer almasını istiyorsanız lütfen renkli LOGONUZU yükleyin. Bu logo sayfa kaydırıldıkça görüntülenecek ve menü beyaz bir arka plan üzerinde görüntülenecektir.';
$string['logo_write'] = 'Kaydırarak üst menü logosu';
$string['logo_write_desc'] = 'Lütfen logonuzu üst kısıma eklemek istiyorsanız yükleyin. Bu logo, kaydırma üstte kaldığında gösterilecek ve menü renkli bir arka plan üzerinde görüntülenecektir.';
$string['matricular'] = 'Kayıt ol';
$string['mycourses_color'] = 'Blok Arka Plan Rengi';
$string['mycourses_color_desc'] = 'Bloğun arka plan rengi.';
$string['mycourses_icon'] = 'Simge';
$string['mycourses_icon_desc'] = 'Bloğu temsil eden bir simge. İkon boyutu 48x48 piksel olmalıdır.';
$string['mycourses_info'] = '{$a}\'yı engelle';
$string['mycourses_numblocos'] = 'Blok yok';
$string['mycourses_numblocos_desc'] = 'Slayt Gösterisinde kaç resim istiyorsunuz?';
$string['mycourses_numblocos_nenhum'] = 'Ana sayfada slayt yok';
$string['mycourses_title'] = 'Kısa Blok Başlığı';
$string['mycourses_title_desc'] = 'Blok için kısa ve açıklayıcı bir başlık.';
$string['mycourses_url'] = 'Bağlantıyı Engelle';
$string['mycourses_url_desc'] = 'Bloğa tıklandığında gidilecek URL. Platform içindeki harici bir bağlantı veya dahili bir bağlantı olabilir.';
$string['pluginname'] = 'Degrade';
$string['privacy:metadata'] = 'Degrade teması hiçbir kullanıcı hakkında herhangi bir kişisel veri saklamaz.';
$string['settings_about_heading'] = 'Moodle\'ınız hakkında';
$string['settings_css_heading'] = 'Yazı tipleri ve CSS';
$string['settings_footer_heading'] = 'Altbilgi Bloğu';
$string['settings_icons_change_icons'] = 'Kurs listesindeki varsayılan simgeyi değiştirme';
$string['settings_login_heading'] = 'Giriş Ekranı';
$string['settings_mycourses_heading'] = 'Kurs Bloklarım';
$string['settings_slideshow_heading'] = 'Slayt Gösterisi';
$string['settings_theme_heading'] = 'Tema';
$string['settings_top_heading'] = 'Üst Menü';
$string['sitefonts'] = 'Ek Google Yazı Tipleri';
$string['sitefonts_desc'] = 'şağıdaki resimde gösterildiği gibi Google Fonts\'tan @import kodunu ekleyin. Kaydettikten sonra, bu yazı tiplerini görüntüleyen "Site Yazı Tipi" alanı güncellenecektir. Gerektiğinde birden fazla @import ekleyebilirsiniz.';
$string['slidecaption_desc'] = 'Slaytta kullanılacak başlık metnini girin';
$string['slideshow_image'] = 'Slayt Resmi';
$string['slideshow_image_desc'] = 'Resim 1250px X 400px olmalıdır.';
$string['slideshow_info'] = '{$a} kaydır';
$string['slideshow_numslides'] = 'Slayt Gösterisinde kaç resim var';
$string['slideshow_numslides_desc'] = 'Slayt Gösterisinde kaç resim istiyorsunuz?';
$string['slideshow_numslides_nenhum'] = 'Ana Sayfada slayt yok';
$string['slideshow_text'] = 'Slayt için kısa açıklayıcı metin';
$string['slideshow_text_desc'] = 'Slaytla ilgili kısa bir metin ekleyin.';
$string['slideshow_url'] = 'Slaytlar düğmesi bağlantısı';
$string['slideshow_url_desc'] = 'Slayt görüntüsü düğmesinin hedef bağlantısını ekleyin';
$string['social_facebook'] = 'Facebook\'unuz';
$string['social_facebook_desc'] = 'Kuruluşunuzun Facebook URL\'si.';
$string['social_instagram'] = 'Instagram\'ınız';
$string['social_instagram_desc'] = 'Kuruluşunuzun Instagram URL\'si.';
$string['social_linkedin'] = 'Linkedin\'iniz';
$string['social_linkedin_desc'] = 'Kuruluşunuzun Linkedin URL\'si.';
$string['social_twitter'] = 'Twitter\'ınız';
$string['social_twitter_desc'] = 'Kuruluşunuzun Twitter URL\'si.';
$string['social_youtube'] = 'Youtube\'unuz';
$string['social_youtube_desc'] = 'Kuruluşunuzun Youtube URL\'si.';
$string['theme_color-color_buttons'] = 'Düğme Rengi';
$string['theme_color-color_buttons_desc'] = 'Düğmeler için kullanılan renk, görsel uyum sağlar ve etkileşimli eylemleri vurgular.';
$string['theme_color-color_names'] = 'İsimlerin Renkleri';
$string['theme_color-color_names_desc'] = 'Adları veya tanımlayıcıları vurgulamak için kullanılan renk, belirli metin bilgilerine netlik ve vurgu sağlar.';
$string['theme_color-color_primary'] = 'Ana Renk';
$string['theme_color-color_primary_desc'] = 'Genellikle vurgu ve vurgu öğeleri için kullanılan temanın ana ana rengi.';
$string['theme_color-color_secondary'] = 'İkincil Renk';
$string['theme_color-color_secondary_desc'] = 'İkincil öğeleri vurgulamak veya ana renkle kontrast oluşturmak için kullanılan, ana rengi tamamlayan ikincil renk.';
$string['theme_color_desc'] = 'Moodle metinlerinin ve düğmelerinin renklerini seçin veya aşağıdaki satıra tıklayın:';
$string['theme_color_heading'] = 'Ortam Renk Seçimi';
$string['theme_color_sugestion'] = 'Renk önerisi';
$string['theme_color_sugestion_text'] = 'Rengi aşağıdaki alanlara uygulamak için çizgiye tıklayın:';
$string['theme_degrade_about_editbooton'] = 'Hakkında Bloğunu Düzenle';
$string['theme_degrade_frontpage_bloco'] = '"{$a}" öğesini engelle';
$string['theme_degrade_frontpage_home'] = 'Ana bloklar';
$string['theme_degrade_mycourses_editbooton'] = 'Blokları Düzenle';
$string['theme_degrade_slideshow_editbooton'] = 'Slayt Gösterisini Düzenle';
$string['theme_login_branco'] = 'Yalnızca giriş ekranı, yan resim yok, beyaz arka planda form var';
$string['top_color_heading'] = 'Üst Rengi Kaydır';
$string['top_scroll'] = 'Sayfayı kaydırırken menüyü sabitleyin';
$string['top_scroll_background_color'] = 'Kaydırmada Üst Menünün Arka Plan Rengi';
$string['top_scroll_background_color_desc'] = 'Sayfayı kaydırırken arka plan rengini ayarlayın. Alan boşsa renk değişmeden kalacaktır.';
$string['top_scroll_desc'] = 'Etkinleştirildiğinde, siz sayfayı kaydırırken menü ekranın üst kısmına sabitlenir ve menü seçeneklerine kolay erişim sağlanır.';
$string['top_scroll_text_color'] = 'Kaydırma Menüsü Metin Rengi';
$string['top_scroll_text_color_desc'] = 'Sayfayı kaydırırken menünün metin rengini ayarlayın.';
$string['vvveb_footer_contact_title_default'] = 'Bize Ulaşın';
$string['vvveb_home_access'] = 'Kursa Erişim';
$string['vvveb_home_automatically_my_course'] = 'Düzenleme yapmayın. Bu blok otomatik olarak öğrencinin kayıtlı olduğu kurslarla değiştirilecektir.';
$string['vvveb_home_mycourses_heading'] = 'Kurslarım';
$string['vvveb_home_popular_course'] = 'Popüler Kurslar';
$string['vvveb_home_team_subtitle'] = 'İşlerine adanmış bir grup profesyoneliz';
$string['vvveb_home_team_title'] = 'Ekibimizle Tanışın';
