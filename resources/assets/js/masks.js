const Mask = {
    sku () {
      $('.sku').mask('AA-AAA-00-0000')
    },
    money () {
        $('.money').mask('000.000.000.000.000,00', {reverse: true});
    }
}

Mask.sku()
Mask.money()