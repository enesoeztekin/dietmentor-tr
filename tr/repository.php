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
 * Strings for component 'repository', language 'tr', version '4.5'.
 *
 * @package     repository
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessiblefilepicker'] = 'Erişilebilir dosya seçici';
$string['activaterep'] = 'Etkin depolar';
$string['activerepository'] = 'Kullanılabilir depo eklentileri';
$string['activitybackup'] = 'Etkinlik yedeği';
$string['add'] = 'Ekle';
$string['addfile'] = 'Ekle...';
$string['addfiletext'] = 'Dosya ekle';
$string['addplugin'] = 'Depo eklentisi ekle';
$string['aliaseschange'] = 'Bu dosyaya giden {$a} bağlantı var.  Devam ederseniz, şu anda dosyaya bağlanan konumlar, bunun yerine dosyanın bir kopyasını kullanacak şekilde otomatik olarak güncellenecektir.';
$string['allowexternallinks'] = 'Harici bağlantılara izin ver';
$string['areacategoryintro'] = 'Kategori tanıtımı';
$string['areacourseintro'] = 'Kurs tanıtımı';
$string['areacourseoverviewfiles'] = 'Kurs resmi';
$string['areamainfile'] = 'Ana dosya';
$string['arearoot'] = 'Sistem';
$string['areauserbackup'] = 'Kullanıcı yedeği';
$string['areauserdraft'] = 'Taslaklar';
$string['areauserpersonal'] = 'Kişisel dosyalar';
$string['areauserprofile'] = 'Profil';
$string['attachedfiles'] = 'İliştirilmiş dosyalar';
$string['attachment'] = 'Ekler';
$string['author'] = 'Yazar';
$string['automatedbackup'] = 'Otomatik yedekleme';
$string['back'] = 'Geri';
$string['backtodraftfiles'] = 'Taslak dosya yöneticisine geri dön';
$string['cachecleared'] = 'Önbelleğe alınmış dosyalar silindi';
$string['cacheexpire'] = 'Önbellek süresi';
$string['cannotaccessparentwin'] = 'HTTPS kullanırken, havuz otomatik olarak yenilenmez.  Bunun yerine, dosya seçiciye geri dönmeniz ve depoyu yeniden seçmeniz gerekir.';
$string['cannotdelete'] = 'Bu dosya silinemez.';
$string['cannotdownload'] = 'Bu dosya indirilemez';
$string['cannotdownloaddir'] = 'Bu klasör indirilemez';
$string['cannotinitplugin'] = 'plugin_init çağırma hatası';
$string['cannotunzipcontentunreadable'] = 'Dosyanın içeriği okunamadığı için bu dosyanın sıkıştırması açılamıyor.';
$string['cannotunzipextractfileerror'] = 'Bir veya daha fazla dosya okunamadığı için bu dosya açılamıyor.';
$string['cannotunzipquotaexceeded'] = 'Bu taslak alanında izin verilen maksimum boyut aşılacağı için bu dosya açılamıyor.';
$string['choosealink'] = 'Bir bağlantı seçin...';
$string['chooselicense'] = 'Lisansı seçin';
$string['chooselicense_help'] = 'Mevcut lisans seçenekleri hakkında daha fazla bilgi için bu bağlantıları takip edin:';
$string['cleancache'] = 'Önbelleğe alınmış dosyalarımı sil';
$string['close'] = 'Kapat';
$string['commonrepositorysettings'] = 'Mevcut depo ayarları';
$string['configallowexternallinks'] = 'Bu seçenek, tüm kullanıcıların harici medyanın Moodle içine kopyalanıp kopyalanamayacağını seçmesine izin verir. Bu etkin değilse, medya her zaman Moodle içine kopyalanır (bu genellikle veri bütünlüğü ve güvenliği için en iyisidir). Etkinse, bir metne medya eklemek için kullanıcılar her zaman seçebilirler.';
$string['configcacheexpire'] = 'Harici depoları gezinirken dosya listesini önbellekte tutma süresi (saniye olarak).';
$string['configgetfiletimeout'] = 'Moodle\'a harici bir dosya indirmek için saniye cinsinden zaman aşımına uğradı.';
$string['configsaved'] = 'Yapılandırma kaydedildi!';
$string['configsyncfiletimeout'] = 'Harici dosya boyutunu senkronize etmek için saniye cinsinden zaman aşımına uğradı.';
$string['configsyncimagetimeout'] = 'Senkronizasyon sırasında harici depodan bir resim dosyasını indirmek için saniye cinsinden zaman aşımına uğradı.';
$string['confirmdelete'] = 'Bu depoyu silmek istediğinize emin misiniz - {$a}? Eğer "Devam et ve indir"i seçerseniz, dosya moodle\'a indirilecek harici içeriklere referans oluşturur ama bu işlem uzun zaman alır.';
$string['confirmdeletefile'] = 'Bu dosyayı silmek istediğinize emin misiniz?';
$string['confirmdeletefilewithhref'] = 'Bu dosyayı silmek istediğinizden emin misiniz? Bu dosyayı kaynak olarak kullanan {$a} takma ad/kısayol dosyaları var. Devam ederseniz, bu takma adlar gerçek kopyalara dönüştürülecektir.';
$string['confirmdeletefolder'] = 'Bu dizini silmek istediğinize emin misiniz? Tüm dosyalar ve altdizinler silinecek.';
$string['confirmdeleteselectedfile'] = 'Seçilen {$a} dosyayı/dosyaları silmek istediğinizden emin misiniz?';
$string['confirmremove'] = 'Bu depo eklentisini, seçeneklerini ve <strong>tüm örneklerini</strong> - {$a} kaldırmak istediğinizden emin misiniz?  "Devam et ve indir"i seçerseniz, harici içeriklere yapılan dosya referansları Moodle\'a indirilecektir.  Bunun işlenmesi uzun zaman alabilir.';
$string['confirmrenamefile'] = 'Bu dosyayı yeniden adlandırmak/taşımak istediğinizden emin misiniz?';
$string['confirmrenamefolder'] = 'Bu klasörü taşımak/yeniden adlandırmak istediğinizden emin misiniz? Şu anda bu klasördeki dosyalara bağlantı veren tüm konumlar, bunun yerine dosyanın kopyalarını kullanmak üzere otomatik olarak güncellenecektir.';
$string['continueuninstall'] = 'Devam et';
$string['continueuninstallanddownload'] = 'Devam et ve indir';
$string['copying'] = 'Kopyalanıyor';
$string['coursebackup'] = 'Kurs yedekleri';
$string['create'] = 'Oluştur';
$string['createfolder'] = 'Klasör oluştur';
$string['createfolderfail'] = 'Bu klasörü oluştururken hata';
$string['createfoldersuccess'] = 'Klasör başarıyla oluşturuldu';
$string['createinstance'] = 'Depo kopyası oluştur';
$string['createrepository'] = 'Depo kopyası oluştur';
$string['createxxinstance'] = '"{$a}" kopyası oluştur';
$string['date'] = 'Tarih';
$string['datecreated'] = 'Oluşturuldu';
$string['deleted'] = 'Depo silindi';
$string['deleterepository'] = 'Bu depoyu sil';
$string['detailview'] = 'Detayları göster';
$string['dimensions'] = 'Boyutlar';
$string['disabled'] = 'Devre dışı bırakıldı';
$string['displayasdetails'] = 'Dosya ayrıntıları olarak görüntüle';
$string['displayasicons'] = 'Dosya simgeleri olarak görüntüle';
$string['displayastree'] = 'Dosya ağacı olarak görüntüle';
$string['displaydetails'] = 'Klasörü dosya ayrıntıları ile görüntüle';
$string['displayicons'] = 'Klasörü dosya ikonları ile görüntüle';
$string['displaytree'] = 'Klasörü dosya ağacı gibi göster';
$string['download'] = 'İndir';
$string['downloadallfiles'] = 'Tüm dosyaları indir';
$string['downloadfolder'] = 'Tümünü indir';
$string['downloadsucc'] = 'Dosya başarıyla indirildi';
$string['draftareanofiles'] = 'İndirilemedi çünkü eklenmiş dosya yok';
$string['editrepositoryinstance'] = 'Depo kopyasını düzenle';
$string['emptylist'] = 'Boş liste';
$string['emptytype'] = 'Depo tipi oluşturulamıyor: tip adı boş';
$string['enablecourseinstances'] = 'Kullanıcıların kursa bir depo örneği eklemesine izin ver';
$string['enableuserinstances'] = 'Kullanıcıların kullanıcı bağlamına bir depo örneği eklemesine izin ver';
$string['enter'] = 'Giriş';
$string['entername'] = 'Lütfen klasör adını girin';
$string['enternewname'] = 'Lütfen yeni dosya adını girin';
$string['error'] = 'Bilinmeyen bir hata oluştu!';
$string['errordoublereference'] = 'Bu dosyanın kısayolları zaten var olduğu için dosyanın bir kısayol/takma adla üzerine yazması mümkün değil.';
$string['errornotyourfile'] = 'Şu tarafından eklenmeyen dosyayı seçemezsiniz;';
$string['errorpostmaxsize'] = 'Yüklemeye çalıştığınız dosya, sunucunun işleyebilmesi için çok büyük.';
$string['erroruniquename'] = 'Depo adı benzersiz olmalıdır';
$string['errorwhilecommunicatingwith'] = '\'{$a}\' deposuyla iletişim kurarken hata oluştu.';
$string['errorwhiledownload'] = 'Dosyayı indirirken bir hata oluştu: {$a}';
$string['existingrepository'] = 'Bu depo zaten var!';
$string['federatedsearch'] = 'Birleşik arama';
$string['fileexists'] = 'Dosya adı zaten kullanılıyor, lütfen başka bir isim seçin';
$string['fileexistsdialog_editor'] = 'Bu ada sahip bir dosya, düzenlemekte olduğunuz metne zaten eklenmiştir.';
$string['fileexistsdialog_filemanager'] = 'Bu isimle zaten bir dosya var';
$string['fileexistsdialogheader'] = 'Bu dosya var';
$string['filename'] = 'Dosya adı';
$string['filenotnull'] = 'Yüklenecek dosyayı seçmelisiniz.';
$string['filepicker'] = 'Dosya seçici';
$string['filesaved'] = 'Dosya kaydedildi';
$string['filesizenull'] = 'Dosya boyutu tespit edilemedi';
$string['folderexists'] = 'Dizin adı zaten kullanılıyor, lütfen başka bir isim seçin';
$string['foldernotfound'] = 'Dizin bulunamadı';
$string['folderrecurse'] = 'Dizin kendi altdizinine taşınamaz';
$string['getfile'] = 'Bu dosyayı seç';
$string['getfiletimeout'] = 'Dosya zaman aşımı öğren/al';
$string['help'] = 'Yardım';
$string['iconview'] = 'Simge olarak göster';
$string['imagesize'] = '{$a->width} x {$a->height} piksel';
$string['instance'] = 'kopya';
$string['instancedeleted'] = 'Kopya silindi';
$string['instances'] = 'Depo kopyaları';
$string['instancesforcourses'] = '{$a} Kurs çapında yaygın örnek(ler)';
$string['instancesforsite'] = '{$a} Site çapında yaygın örnek(ler)';
$string['instancesforusers'] = '{$a} Özel kullanıcı örnek(ler)';
$string['invalidfiletype'] = '{$a} dosya türü kabul edilemez';
$string['invalidjson'] = 'Geçersiz JSON ifadesi';
$string['invalidparams'] = 'Geçersiz parametre';
$string['invalidplugin'] = 'Geçersiz {$a} depo eklentisi';
$string['invalidrepositoryid'] = 'Geçersiz depo ID';
$string['isactive'] = 'Aktif?';
$string['keyword'] = 'Anahtar sözcük';
$string['lastmodified'] = 'Son değiştirme';
$string['license'] = 'Lisans';
$string['linkexternal'] = 'Harici bağlantı';
$string['listview'] = 'Liste görünümü';
$string['loading'] = 'Yükleniyor...';
$string['login'] = 'Hesabınıza giriş yapın';
$string['logintoaccount'] = '{$a} hesabınıza giriş yapın';
$string['logout'] = 'Çıkış';
$string['lostsource'] = 'Hata. Kaynak bulunamadı. {$a}';
$string['makefilecontrolledlink'] = 'Dosyaya erişim kontrollü bir bağlantı oluşturun';
$string['makefileinternal'] = 'Dosyanın bir kopyasını oluştur';
$string['makefilelink'] = 'Doğrudan dosyaya bağla';
$string['makefilereference'] = 'Dosya bağlantısı';
$string['manage'] = 'Depoları yönet';
$string['manageinstances'] = 'Örnekleri yönet';
$string['manageurl'] = 'Yönet';
$string['manageuserrepository'] = 'Bireysel depoyu yönet';
$string['missingsourcekey'] = 'Kaynak anahtarı eksik.  Bu anahtar, dosyayı almak için de sağlanmalıdır.';
$string['moving'] = 'Taşınıyor';
$string['name'] = 'İsim';
$string['newfolder'] = 'Yeni klasör';
$string['newfoldername'] = 'Yeni klasör adı:';
$string['noenter'] = 'Hiçbir şey girilmedi';
$string['nofilesattached'] = 'Dosya ilişkilendirilmedi';
$string['nofilesavailable'] = 'Uygun dosya yok';
$string['nofilesselected'] = 'Dosya seçilmedi';
$string['nolicenses'] = 'Kullanılabilir lisans yok';
$string['nomorefiles'] = 'Artık dosya iliştirilmesine izin yok';
$string['nopathselected'] = 'Henüz hedef yol seçilmemiş (seçmek için nesneyi çift tıklayın)';
$string['nopermissiontoaccess'] = 'Bu depoya erişim hakkınız yok.';
$string['norepositoriesavailable'] = 'Maalesef, mevcut depolarınızdan hiçbiri bu biçimde dosya döndüremez.';
$string['norepositoriesexternalavailable'] = 'Maalesef mevcut depolarınızdan hiçbiri harici dosya döndüremiyor.';
$string['noresult'] = 'Boş arama sonucu';
$string['notyourinstances'] = 'Başka bir kullanıcının deposuna bakamaz/düzenleyemezsiniz';
$string['off'] = 'Etkin ama gizli';
$string['on'] = 'Etkin ve görünür';
$string['openpicker'] = 'Dosya seç...';
$string['operation'] = 'İşlem';
$string['original'] = 'Orijinal';
$string['originalextensionchange'] = 'Orijinal dosya uzantısı, dosya adı değişikliğinin bir parçası olarak değiştirildi.  ".{$a->originalextension}" olan uzantının ".{$a->newextension}" olarak değiştirilmesi dosyanın açılamamasına neden olabilir.';
$string['originalextensionremove'] = 'Orijinal dosya uzantısı, dosya adı değişikliğinin bir parçası olarak kaldırıldı.  ".{$a}" uzantısının kaldırılması, dosyanın açılamamasına neden olabilir.';
$string['overwrite'] = 'Üzerine yaz';
$string['overwriteall'] = 'Tümünün üzerine yaz';
$string['path'] = 'Yol';
$string['plugin'] = 'Depo eklentileri';
$string['pluginerror'] = 'Depo eklentisinde hata.';
$string['pluginname'] = 'Depo eklenti adı';
$string['pluginnamehelp'] = 'Eğer burayı boş bırakırsanız varsayılan isim kullanılacak.';
$string['popup'] = 'Giriş yapmak için "Giriş" düğmesine basın';
$string['popupblockeddownload'] = 'İndirme penceresi engellendi, lütfen açılır pencereye izin verin ve tekrar deneyin.';
$string['preview'] = 'Önizleme';
$string['privacy:metadata:repository'] = 'Repository bileşeni, çekirdek alt sistem içindeki repository tiplerini depolar.';
$string['privacy:metadata:repository_instances'] = 'Depo eklentileri bileşeni, kullanıcı deposu örnek verilerini çekirdek alt sistem içinde depolar.';
$string['privacy:metadata:repository_instances:name'] = 'Depo örneğinin özel adı.';
$string['privacy:metadata:repository_instances:password'] = 'Depo örneği için yapılandırılan isteğe bağlı parola.';
$string['privacy:metadata:repository_instances:timecreated'] = 'Depo örneğinin oluşturulma tarihi/saati.';
$string['privacy:metadata:repository_instances:timemodified'] = 'Depo örneğinin değiştirilme tarihi/saati.';
$string['privacy:metadata:repository_instances:typeid'] = 'Repository örneğinin kimlik türü.';
$string['privacy:metadata:repository_instances:userid'] = 'Repo örneğinin sahibi olan kullanıcının kimliği.';
$string['privacy:metadata:repository_instances:username'] = 'Depo örneği için yapılandırılan isteğe bağlı kullanıcı adı.';
$string['privatefilesof'] = '{$a} Özel dosyalar';
$string['readonlyinstance'] = 'Sadece okunabilir bir depoyu düzenleyemez/silemezsiniz';
$string['referencesexist'] = 'Bu dosyaya {$a} bağlantı var';
$string['referenceslist'] = 'Bağlantılar';
$string['refresh'] = 'Yenile';
$string['refreshnonjsfilepicker'] = 'Lütfen bu pencereyi kapatın ve javascriptsiz dosya seçiciyi yenileyin';
$string['removed'] = 'Depo silindi';
$string['renameall'] = 'Tümünü yeniden adlandır';
$string['renameto'] = 'Şöyle yeniden adlandır "{$a}"';
$string['repositories'] = 'Depolar';
$string['repository'] = 'Depo';
$string['repositorycourse'] = 'Kurs depoları';
$string['repositoryerror'] = 'Uzak depo hata döndürdü: {$a}';
$string['repositoryicon'] = 'Depo simgesi';
$string['save'] = 'Kaydet';
$string['saveas'] = 'Farklı kaydet';
$string['saved'] = 'Kaydedildi';
$string['saving'] = 'Kaydediliyor';
$string['search'] = 'Ara';
$string['searching'] = 'Aranan';
$string['searchrepo'] = 'Depo ara';
$string['sectionbackup'] = 'Bölüm yedekleri';
$string['select'] = 'Seç';
$string['setmainfile'] = 'Ana dosyayı düzenle';
$string['setmainfile_help'] = 'Eğer klasörde birden fazla dosya varsa, ana dosya sayfada gösterilendir. Videolar, resimler gibi diğer dosyalar içine gömülmüş olabilir. Dosya yöneticisinde ana dosya kalın bir başlık ile gösterilir.';
$string['settings'] = 'Ayarlar';
$string['setupdefaultplugins'] = 'Varsayılan depo eklentileri ayarlanıyor';
$string['siteinstances'] = 'Sitenin depo kopyaları';
$string['size'] = 'Boyut';
$string['sourcekeymismatch'] = 'Kaynak URL, kaynak anahtarla eşleşmiyor.';
$string['submit'] = 'Gönder';
$string['sync'] = 'Eşitle';
$string['syncfiletimeout'] = 'Dosya zaman aşımını senkronize et';
$string['syncimagetimeout'] = 'Resim zaman aşımını senkronize et';
$string['thumbview'] = 'Simge görünümü';
$string['title'] = 'Dosya seçin...';
$string['type'] = 'Tür';
$string['typenotvisible'] = 'Tip görünür değil';
$string['undisclosedreference'] = '(Gizli)';
$string['undisclosedsource'] = '(Gizli)';
$string['unknownoriginal'] = 'Bilinmeyen';
$string['unknownsource'] = 'Bilinmeyen kaynak';
$string['unzipped'] = 'Başarıyla çıkartıldı';
$string['upload'] = 'Bu dosyayı yükle';
$string['uploading'] = 'Yükleniyor...';
$string['uploadsucc'] = 'Bu dosya başarıyla yüklendi';
$string['uselatestfile'] = 'Son dosyayı kullan';
$string['usenonjsfilemanager'] = 'Dosya yöneticisini yeni pencerede aç';
$string['usenonjsfilepicker'] = 'Dosya seçicisini yeni pencerede aç';
$string['usercontextrepositorydisabled'] = 'Kullanıcı bağlamında bu depoyu düzenleyemezsiniz';
$string['wrongcontext'] = 'Bu bağlama erişemezsiniz';
$string['xhtmlerror'] = 'Muhetemelen kuralcı XHTML başlıklarını kullanıyorsunuz. Bazı YUI bileşenleri bu modda çalışmaz. Lütfen devre dışı bırakın.';
$string['ziped'] = 'Klasör başarıyla sıkıştırıldı';
