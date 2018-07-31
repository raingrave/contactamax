
const InputOrder = {
    btSearch: $('#bt-product-search'),
    sku: $('#input-sku'),
    list: $('#table-list'),
    items: [],
    btDelete: $('.bt-input-order-delete'),

    getProduct () {
        this.btSearch.on('click', (event) => {
            event.preventDefault()
            if (! _.isEmpty(this.sku.val())) {
                $.blockUI({ message: '<h3>Aguarde...</h3>',css: { backgroundColor: '#69757C', color: '#fff'} });

                $.get(`/dashboard/produto/find/${this.sku.val()}`).then(response => {
                    this.list
                        .find('tbody')
                        .append(
                            `<tr>
                          <td>${response.sku}</td>
                          <td>${response.category.name}</td>
                          <td>${response.name}</td>
                          <td>${response.description}</td>
                          <td width="40px">
                            <input name="product_id[]" value="${response.id}" class="form-control form-control-sm" type="hidden">
                            <input name="quantity[]" value="1" class="form-control form-control-sm bg-secondary text-white quantity" type="number">
                          </td>
                          <td>
                            <input name="price[]" value="${response.price}" class="form-control form-control-sm" type="hidden">
                            R$ <span class="money price">${response.price}</span>
                          </td>
                          <td>
                            <a href="#" class="btn btn-sm btn-secondary">
                              <i class="fas fa-minus"></i>  
                            </a>
                          </td>
                        </tr>`
                        )

                    this.items.push({
                        id: response.id,
                        quantity: $('.quantity').val(),
                        price: response.price
                    })

                    $('input[name=total]').val(this.toMoney(this.getTotal(this.items)))
                })

                $.unblockUI();
            }
        })
    },

    getTotal (items) {
        return _.sum(items.map(item => item.quantity * item.price.replace('.', '').replace(',', '.')))
    },

    toMoney (value) {
        return value.toLocaleString('pt-BR', { minimumFractionDigits: 2})
    },

    remove () {
        this.btDelete.on('click', function (event) {
            event.preventDefault()
            let answer = confirm('Confirma a operação?')

            if (answer) {
                $(this).next().submit()
            }
        })
    }
}

InputOrder.getProduct()
InputOrder.remove()