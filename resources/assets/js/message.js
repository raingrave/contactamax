const Message = {
    el: $('.alert'),
    delay: 3000,
    animation: 300,

    autoHide () {
        setTimeout(() => this.el.fadeOut(this.animation), this.delay)
    }
}

Message.autoHide()