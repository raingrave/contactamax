const Product = {
    btShow: $('.bt-show'),
    btDelete: $('.bt-delete'),
    formDelete: $('#form-delete'),

    show () {
        this.btShow.on('click', (event) => {
            event.preventDefault()
            
            console.log(this)
        })
    },

    remove () {
        this.btDelete.on('click', (event) => {
            event.preventDefault()
            let answer = confirm('Confirma a operação?')
            
            if (answer) {
                this.formDelete.submit()
            }    
        })
    }
}

Product.show()
Product.remove()