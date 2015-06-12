(function ($, Edge, compId) {
    var Composition = Edge.Composition,
        Symbol = Edge.Symbol;
    //Edge symbol: 'stage'
    (function (symbolName) {
        Symbol.bindElementAction(compId, symbolName, "${_Text2}", "click", function (sym, e) {
            window.open("http://www.w3designlk.com", "_blank");
        });
        //Edge binding end
        Symbol.bindTriggerAction(compId, symbolName, "Default Timeline", 47000, function (sym, e) {
            sym.play();
        });
        //Edge binding end
    })("stage");
    //Edge symbol end:'stage'
})(jQuery, AdobeEdge, "EDGE-7766665");