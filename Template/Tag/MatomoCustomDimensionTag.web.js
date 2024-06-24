(function () {
    return function (parameters, TagManager) {
        this.fire = function () {

          var dimensionId = parameters.get("dimension_id");
          var dimensionValue = parameters.get("dimension_value");

          window._paq = window._paq || [];
          window._paq.push(["setCustomDimension", dimensionId, dimensionValue]);

        };
    };
})();
