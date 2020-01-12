!(function(t) {
  t.fn.savy = function(e, s) {
    "load" == e
      ? (t(this).each(function() {
          t(this).is(":radio")
            ? (localStorage.getItem("savy-" + t(this).attr("name")) &&
                (localStorage.getItem("savy-" + t(this).attr("name")) == this.id
                  ? (this.checked = !0)
                  : (this.checked = !1)),
              t(this).change(function() {
                localStorage.setItem("savy-" + t(this).attr("name"), this.id);
              }))
            : t(this).is(":checkbox")
            ? (localStorage.getItem("savy-" + this.id) && (this.checked = "1" == localStorage.getItem("savy-" + this.id) ? !0 : !1),
              t(this).change(function() {
                localStorage.setItem("savy-" + this.id, this.checked ? "1" : "0");
              }))
            : t(this).is("input") || t(this).is("textarea")
            ? (localStorage.getItem("savy-" + this.id) && (this.value = localStorage.getItem("savy-" + this.id)),
              t(this).keyup(function() {
                localStorage.setItem("savy-" + this.id, this.value);
              }))
            : t(this).is("select") && (t(this).is("[multiple]")
                ? (localStorage.getItem("savy-" + this.id) &&
                    t(this).val(localStorage.getItem("savy-" + this.id).split(",")),
                    t(this).change(function() {
                    localStorage.setItem("savy-" + this.id, t(this).val());
                  }))
                : (localStorage.getItem("savy-" + this.id) &&
                    t(this).val(localStorage.getItem("savy-" + this.id)),
                  t(this).change(function() {
                    localStorage.setItem("savy-" + this.id, t(this).val());
                  })));
        }),
        t.isFunction(s) && s())
      : "destroy" == e
      ? (t(this).each(function() {
          localStorage.getItem("savy-" + this.id) &&
            localStorage.removeItem("savy-" + this.id);
        }),
        t.isFunction(s) && s())
      : console.error("savy action not defined please use $('.classname').savy('load') to trigger savy to save all inputs");
  };
})(jQuery);
