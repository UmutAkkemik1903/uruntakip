const uygulama = new Vue({
    el:'#app',
    name: 'Vue Baslangic',
    data:{

        kullanicilar: [{
            id:'#mal',
            isim:'#barkot',
            rol:'Admin'
        },
            {
                id:2,
                isim:'Ümit',
                rol:'User'
            },
            {
                id:3,
                isim:'Ufuk',
                rol:'User'
            }
        ]
    },
    methods:{
        yeniKullanici()
        {
            this.aktifkullanici={rol:''};
            $('#kullaniciModal').modal('show');
        },

        kullaniciDuzenle(home){
            this.aktifkullanici = this.kullanicilar[home];
            $('#kullaniciModal').modal('show');
        }
    }

})
