(function ($, Edge, compId) {
    var _ = null,
        y = true,
        n = false,
        e38 = '${_need_responsive}',
        e21 = '${_Text2}',
        e34 = '${_hand_downCopy}',
        e42 = '${_Fresher-Resume-Format}',
        e29 = '${_hand_downCopy4}',
        x37 = 'rgba(7,7,7,0.78)',
        x26 = 'hidden',
        dt = 'Default Timeline',
        i = 'none',
        e27 = '${_hand_downCopy3}',
        e30 = '${_help_word_1}',
        lf = 'left',
        x32 = 'rgba(253,0,23,1.00)',
        qie = 'easeInExpo',
        x31 = 'rgba(255,233,19,0.80)',
        bg = 'background-color',
        fs = 'font-size',
        tp = 'top',
        ta = 'text-align',
        ov = 'overflow',
        xc = 'rgba(0,0,0,1)',
        x23 = 'rgba(0,0,0,0.65)',
        x19 = 'stage',
        x18 = '32',
        rz = 'rotateZ',
        c = 'color',
        x5 = 'rgba(0,0,0,0)',
        e33 = '${_Text8}',
        g = 'image',
        po = 'center',
        x20 = 'rgba(10,0,0,1.00)',
        x24 = 'rgba(114,181,200,1.00)',
        x = 'text',
        h = 'height',
        e40 = '${_customize_your_web}',
        qiq = 'easeInQuad',
        e41 = '${_Text9}',
        e39 = '${_hand_downCopy2}',
        p = 'px',
        o = 'opacity',
        qii = 'easeInQuint',
        ql = 'linear',
        e35 = '${_low_cost}',
        qob = 'easeOutBounce',
        e36 = '${_Text}',
        t = 'transform',
        x2 = 'happy-monkey, sans-serif',
        r = 'deg',
        e25 = '${_Stage}',
        l = 'normal',
        x4 = '2.0.0.250',
        a = 'Base State',
        e28 = '${_hand_down}',
        s = 'style',
        w = 'width',
        x8 = '24',
        x3 = '2.0.0',
        x12 = '20',
        ff = 'font-family',
        x1 = 'alegreya-sc, serif',
        x22 = 'pointer';
    var im = 'http://youngcrew.lk/wp-content/themes/young/assets/images/';
    var g6 = 'Fresher-Resume-Format.JPG',
        g13 = 'hand_down.png';
    var s15 = "Want's to customize your website?",
        s10 = "Need a website<br>with",
        s11 = "LOW COST ?",
        s16 = "Need a wordpress theme ?",
        s17 = "Need to make your add with HTML5",
        s7 = "Call Us : 0714309008",
        s14 = "Need a responsive web solution ?",
        s9 = "www.w3designlk.com";
    var fonts = {};
    fonts[x1] = '<script src=\"http://use.edgefonts.net/alegreya-sc:n9,i9,n7,i4,n4,i7:all.js\"></script>';
    fonts[x2] = '<script src=\"http://use.edgefonts.net/happy-monkey:n4:all.js\"></script>';
    var P = Edge.P,
        T = Edge.T,
        A = Edge.A;
    var resources = [];
    var symbols = {
        "stage": {
            v: x3,
            mv: x3,
            b: x4,
            bS: a,
            iS: a,
            gpu: n,
            rI: n,
            cn: {
                dom: [{
                    id: 'Fresher-Resume-Format',
                    t: g,
                    r: ['-19px', '-1px', '977px', '184px', 'auto', 'auto'],
                    o: 0.17213114754098,
                    f: [x5, im + g6, '0px', '0px']
                }, {
                    id: 'Text',
                    t: x,
                    r: ['9px', '184px', '250px', '25px', 'auto', 'auto'],
                    text: s7,
                    n: [x2, x8, xc, l, i, ""],
                    textShadow: ["rgba(0,0,0,0.648438)", 3, 3, 3]
                }, {
                    id: 'Text2',
                    t: x,
                    r: ['1px', '211px', '250px', '25px', 'auto', 'auto'],
                    cu: ['pointer'],
                    text: s9,
                    align: "center",
                    n: [x1, x8, xc, l, i, l]
                }, {
                    id: 'help_word_1',
                    t: x,
                    r: ['9px', '-93px', '236px', '62px', 'auto', 'auto'],
                    text: s10,
                    align: "center",
                    n: [x1, x8, xc, l, i, l]
                }, {
                    id: 'low_cost',
                    t: x,
                    r: ['-243px', '92px', '236px', '93px', 'auto', 'auto'],
                    text: s11,
                    align: "center",
                    n: [x1, x12, xc, l, i, l],
                    textShadow: ["rgba(0,0,0,0.65)", 3, 3, 3]
                }, {
                    id: 'hand_down',
                    t: g,
                    r: ['106px', '-43px', '41px', '41px', 'auto', 'auto'],
                    f: [x5, im + g13, '0px', '0px']
                }, {
                    id: 'need_responsive',
                    t: x,
                    r: ['17px', '-1px', '212px', '138px', 'auto', 'auto'],
                    text: s14,
                    align: "center",
                    n: [x1, x8, "rgba(10,0,0,1.00)", l, i, l]
                }, {
                    id: 'hand_downCopy',
                    t: g,
                    r: ['106px', '-43px', '41px', '41px', 'auto', 'auto'],
                    f: [x5, im + g13, '0px', '0px']
                }, {
                    id: 'customize_your_web',
                    t: x,
                    r: ['259px', '20px', '218px', '93px', 'auto', 'auto'],
                    text: s15,
                    align: "center",
                    n: [x1, x8, xc, l, i, l]
                }, {
                    id: 'hand_downCopy2',
                    t: g,
                    r: ['106px', '-43px', '41px', '41px', 'auto', 'auto'],
                    f: [x5, im + g13, '0px', '0px']
                }, {
                    id: 'Text8',
                    t: x,
                    r: ['-223px', '20px', '212px', '83px', 'auto', 'auto'],
                    text: s16,
                    align: "center",
                    n: [x1, x8, xc, l, i, l]
                }, {
                    id: 'hand_downCopy3',
                    t: g,
                    r: ['106px', '-43px', '41px', '41px', 'auto', 'auto'],
                    f: [x5, im + g13, '0px', '0px']
                }, {
                    id: 'Text9',
                    t: x,
                    r: ['17px', '-130px', '218px', '109px', 'auto', 'auto'],
                    text: s17,
                    align: "center",
                    n: [x1, x18, xc, l, i, l]
                }, {
                    id: 'hand_downCopy4',
                    t: g,
                    r: ['106px', '-43px', '41px', '41px', 'auto', 'auto'],
                    f: [x5, im + g13, '0px', '0px']
                }],
                sI: []
            },
            s: {},
            tl: {
                "Default Timeline": {
                    fS: a,
                    tS: "",
                    d: 47000,
                    a: y,
                    tt: []
                }
            }
        }
    };
    var S1 = symbols[x19];
    var tl0 = S1.tl[dt].tt,
        st1 = S1.s[a] = {},
        A1 = A(_, tl0, st1);
    A1.A(e21).P(tp, 211).P(ta, po).P("cursor", x22).P("font-style", l).P(ff, x1).P(lf, 1).P("text-decoration", i);
    A1.A(e25).P(bg, x24, c).P(w, 250).P(h, 250).P(ov, x26);
    A1.A(e27).P(h, 41).P(lf, 106).P(w, 41).P(tp, -43).T(34.497, 148, 0.584, qob).P(o, 1, _, _, "").T(37.416, 0, 0.584, qie);
    A1.A(e28).P(h, 41).P(lf, 106).P(w, 41).P(tp, -43).T(5.429, 148, 0.679, qob).P(o, 1, _, _, "").T(8.821, 0.04, 0.679, qie);
    A1.A(e29).P(h, 41).P(lf, 106).P(w, 41).P(tp, -43).T(43, 148, 0.667, qob).P(o, 1, _, _, "").T(46.333, 0, 0.667, qie);
    A1.A(e30).P(rz, 0, t, _, r).P(h, 62, _, _, p).P("filter.drop-shadow.color", x31, "subproperty").T(6.107, x31).P("filter.contrast", 1.87, "subproperty", _, "").T(6.107, 1.87).P("filter.hue-rotate", 43, "subproperty", _, r).T(6.107, 43).P(o, 0.49, _, _, "").T(0, 1, 1.357, qiq).T(8.821, 0, 0.679, qie).P(lf, 5, _, _, p).T(6.107, 5).P("filter.drop-shadow.offsetH", 2, "subproperty").T(6.107, 2).P(tp, -93).T(0, 20, 1.357, qiq).P("filter.saturate", 0, "subproperty", _, "").T(6.107, 0).P("filter.invert", 0, "subproperty").T(6.107, 0).P("filter.sepia", 0, "subproperty").T(6.107, 0).P("filter.drop-shadow.offsetV", 2, "subproperty", _, p).T(6.107, 2).P(c, x32, c).T(6.107, x32);
    A1.A(e33).P(h, 127).T(34.497, 127).P(o, 1, _, _, "").T(37.416, 0, 0.584, qob).P(lf, -223, _, _, p).T(29, 15, 3).T(34.497, 14).P(fs, 24).T(32, 32, 2.497);
    A1.A(e34).P(h, 41).P(lf, 106).P(w, 41).P(tp, -43).T(14.679, 148, 0.679, qob).P(o, 1, _, _, "").T(18.071, 0, 0.679, qie);
    A1.A(e35).P("textShadow.blur", 3, "subproperty").P("textShadow.offsetH", 3, "subproperty").P("textShadow.offsetV", 3, "subproperty").P(h, 93).P("textShadow.color", x23, "subproperty").P(tp, 92).T(3.393, 131, 1.018, qob).T(4.411, 92, 1.018).P(o, 1, _, _, "").T(8.821, 0, 0.679, qie).P(lf, -243, _, _, p).T(1.357, 1, 1.184, qiq).T(2.541, 7, 0.852).P(fs, 20).T(1.357, 20).T(2.541, 44, 0.852);
    A1.A(e36).P(tp, 184).P(h, 25).P(lf, 9).P(ff, x2).P("textShadow.blur", 4, "subproperty").T(0, 4).P("textShadow.color", x37, "subproperty").T(0, x37).P("textShadow.offsetH", 3, "subproperty").T(0, 0, 1.022, ql).T(1.022, 3, 1.022).T(2.043, 0, 1.022).T(3.065, 3, 1.022).T(4.087, 0, 1.022).T(5.109, 3, 1.022).T(6.13, 0, 1.022).T(7.152, 3, 1.022).T(8.174, 0, 1.022).T(9.196, 3, 1.022).T(10.217, 0, 1.022).T(11.239, 3, 1.022).T(12.261, 0, 1.022).T(13.283, 3, 1.022).T(14.304, 0, 1.022).T(15.326, 3, 1.022).T(16.348, 0, 1.022).T(17.37, 3, 1.022).T(18.391, 0, 1.022).T(19.413, 3, 1.022).T(20.435, 0, 1.022).T(21.457, 3, 1.022).T(22.478, 0, 1.022).T(23.5, 3, 1.022).T(24.522, 0, 1.022).T(25.543, 3, 1.022).T(26.565, 0, 1.022).T(27.587, 3, 1.022).T(28.609, 0, 1.022).T(29.63, 3, 1.022).T(30.652, 0, 1.022).T(31.674, 3, 1.022).T(32.696, 0, 1.022).T(33.717, 3, 1.022).T(34.739, 0, 1.022).T(35.761, 3, 1.022).T(36.783, 0, 1.022).T(37.804, 3, 1.022).T(38.826, 0, 1.022).T(39.848, 3, 1.022).T(40.87, 0, 1.022).T(41.891, 3, 1.022).T(42.913, 0, 1.022).T(43.935, 3, 1.022).T(44.957, 0, 1.022).T(45.978, 3, 1.022).P("textShadow.offsetV", 3, "subproperty").T(0, 0, 1.022).T(1.022, 3, 1.022).T(2.043, 0, 1.022).T(3.065, 3, 1.022).T(4.087, 0, 1.022).T(5.109, 3, 1.022).T(6.13, 0, 1.022).T(7.152, 3, 1.022).T(8.174, 0, 1.022).T(9.196, 3, 1.022).T(10.217, 0, 1.022).T(11.239, 3, 1.022).T(12.261, 0, 1.022).T(13.283, 3, 1.022).T(14.304, 0, 1.022).T(15.326, 3, 1.022).T(16.348, 0, 1.022).T(17.37, 3, 1.022).T(18.391, 0, 1.022).T(19.413, 3, 1.022).T(20.435, 0, 1.022).T(21.457, 3, 1.022).T(22.478, 0, 1.022).T(23.5, 3, 1.022).T(24.522, 0, 1.022).T(25.543, 3, 1.022).T(26.565, 0, 1.022).T(27.587, 3, 1.022).T(28.609, 0, 1.022).T(29.63, 3, 1.022).T(30.652, 0, 1.022).T(31.674, 3, 1.022).T(32.696, 0, 1.022).T(33.717, 3, 1.022).T(34.739, 0, 1.022).T(35.761, 3, 1.022).T(36.783, 0, 1.022).T(37.804, 3, 1.022).T(38.826, 0, 1.022).T(39.848, 3, 1.022).T(40.87, 0, 1.022).T(41.891, 3, 1.022).T(42.913, 0, 1.022).T(43.935, 3, 1.022).T(44.957, 0, 1.022).T(45.978, 3, 1.022);
    A1.A(e38).P(tp, -1).P(c, x20, c).P(h, 138).P(lf, 17).P(fs, 24).T(10.25, 34, 0.25, qii).T(10.5, 34).T(11, 32, 0.399).P(o, 0, _, _, "").T(9.5, 1, 0.75).T(18.071, 0, 0.679);
    A1.A(e39).P(h, 41).P(lf, 106).P(w, 41).P(tp, -43).T(24, 148, 0.833, qob).P(o, 1, _, _, "").T(28.167, 0, 0.833, qie);
    A1.A(e40).P(tp, 20).P(h, 93).P(o, 1, _, _, "").T(28.167, 0, 0.833, qob).P(lf, 259, _, _, p).T(18.75, 15, 3.25).P(fs, 24).T(22, 30, 2);
    A1.A(e41).P(h, 127).T(38, 127).P(o, 1, _, _, "").T(46.333, 0, 0.667, qob).P(tp, -130, _, _, p).T(38, 51, 3).T(41, 18, 2);
    A1.A(e42).P(o, 0.17, _, _, "").P(lf, -19, _, _, p).T(0, -275, 9.5, ql).T(9.5, -19, 9.25).T(18.75, -271, 10.25).T(29, -23, 9).T(38, -269, 9).P(tp, 0).T(9.5, 0);
    Edge.registerCompositionDefn(compId, symbols, fonts, resources);
    $(window).ready(function () {
        Edge.launchComposition(compId);
    });
})(jQuery, AdobeEdge, "EDGE-7766665");