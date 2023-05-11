@extends('layout.master')
@section('body')

<div class="accordion" id="accordionExample">
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Siparişler
            </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <strong>Nasıl sipariş verebilirim?</strong><br>
                Alışveriş yapmak için üye girişi yapmalısınız. Sipariş vermek için aşağıdaki adımları izlemelisiniz.<br>
                1. İncelediğiniz ürünü sepetinize ekleyiniz.<br>
                2. “Sepetim” sayfasında ürün bilgilerinizi kontrol ediniz. Değişiklik yapmak istediğiniz alanlar varsa güncelleyiniz.
                <br>3. Ödeme yapmak için “SATIN AL” butonuna basınız.<br>
                4. Teslimat ve fatura adresinizi seçiniz. “Yeni Adres Ekle” seçeneği ile farklı bir teslimat adresi girebilirsiniz.
                <br>5. “Kargo teslim adresi, fatura adresi ile aynı.” seçeneğini tıkladığınızda, teslimat adresinize fatura kesilecektir.(E-Fatura mükkellefiyseniz, faturanız sistem üzerinden gönderilecektir.)
                <br>6. Farklı bir adres ve kişiye/kuruma fatura kesilecek ise; tiki kaldırmanız gerekmektedir. Bu durumda yeni adres bilgilerini ekleyebilirsiniz.
                <br>7. Siparişi tamamla butonuna basarak “Ödeme” sayfasına gelerek ödeme tipini seçiniz.
                <br>8. “Mesafeli Satış” ve “Ön Bilgilendirme” kabul sözleşmelerini onayladıktan sonra “SİPARİŞİ TAMAMLA” seçeneği ile siparişinizi sonlanlandırınız.
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Teslimat ve Kargo
            </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <strong>Siparişim kaç günde teslim edilir? Teslimat seçenekleriniz nelerdir?</strong><br>
                Siparişinizi oluşturduğunuz esnada “Teslimat Bilgileri” sayfasında sipariş teslim tarihi belirtilmektedir. Siparişiniz bu tarihe uygun olarak sevk edilecektir.
                Siparişleriniz için Adrese Teslim, seçili il/ilçeler için Ertesi Gün Teslimat ve Teslimat Noktası olmak üzere 3 farklı teslimat seçeneği sunulmaktadır.
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Sipariş İptali
            </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <strong>Siparişimi nasıl iptal edebilirim?</strong><br>
                Siparişinizi, faturanız kesilmeden hemen önce iptal edebilirsiniz. “Siparişlerim” sayfasından siparişinize ulaşabilir, “Siparişiniz Hazırlanıyor” aşamasında olan siparişinizi ya da içerisinden bir veya birden fazla ürünü “Sipariş Detay” alanına tıkladıktan sonra “İptal Et” butonunu kullanarak iptal edebilirsiniz.
                Ayrıca siparişiniz adresinize geldiğinde kargo personelinden teslim almayarak tarafımıza geri gönderilmesini sağlayabilirsiniz.
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                İade İşlemleri
            </button>
        </h2>
        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <strong>Aldığım ürünü/ ürünleri iade edebilir miyim?</strong><br>
                Cayma hakkı kapsamındaki ürünleri, paketi hasar görmemiş ve kullanılmamış olması koşulu ile siparişiniz elinize ulaştıktan 14 gün içerisinde tüm aksesuarları, promosyonları ve orijinal kutusu ile iade edebilirsiniz.
                Yurtdışı teslimatlı siparişlerde cayma hakkı kullanılması durumunda kargo gönderi ücreti müşteriye ait olacaktır.
            </div>
        </div>
    </div>

</div>

@endsection