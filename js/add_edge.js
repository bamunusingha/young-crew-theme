(function ($, Edge, compId) {
    var _ = null,
        y = true,
        n = false,
        or = '-webkit-transform-origin',
        qw = 'swing',
        x29 = 'rgba(248,133,133,0.65)',
        x57 = 'rgba(146,5,167,1)',
        e32 = '${_Text2}',
        x51 = 'rgba(46,218,7,1)',
        x48 = 'rgba(46,218,7,1.00)',
        x38 = 'rgba(0,0,0,0.648438)',
        a = 'Base State',
        x45 = 'rgba(39,4,4,1.00)',
        x24 = 'hidden',
        e22 = '${_Text10}',
        s = 'style',
        qid = 'easeInCirc',
        lf = 'left',
        x56 = 'rgba(219,6,6,1.00)',
        x58 = 'rgba(188,91,5,1.00)',
        e60 = '${_hand_photoCopy}',
        bg = 'background-color',
        x23 = '@@0@@% @@1@@%',
        om = '-ms-transform-origin',
        fs = 'font-size',
        tp = 'top',
        e40 = '${_phone_}',
        x9 = '16',
        ov = 'overflow',
        e42 = '${_Stage}',
        x7 = '12',
        x21 = 'stage',
        x15 = '32',
        t = 'transform',
        c = 'color',
        x16 = 'rgba(0,0,0,0)',
        e44 = '${_Text8}',
        x52 = 'rgba(15,5,167,1.00)',
        g = 'image',
        po = 'center',
        x55 = 'rgba(15,5,167,1)',
        x4 = '19',
        oz = '-moz-transform-origin',
        rz = 'rotateZ',
        x59 = 'rgba(219,6,6,1)',
        x13 = '25',
        x50 = 'rgba(7,218,198,1.00)',
        x53 = 'rgba(7,218,198,1)',
        x54 = 'rgba(146,5,167,1.00)',
        h = 'height',
        e25 = '${_Text9}',
        x49 = 'rgba(218,211,7,1)',
        x47 = 'rgba(39,4,4,1)',
        x46 = 'rgba(218,211,7,1.00)',
        x43 = 'rgba(255,255,255,1)',
        e31 = '${_Text7}',
        x33 = 'rgba(33,64,234,1.00)',
        e41 = '${_hand_photo}',
        on = 'msTransformOrigin',
        e61 = '${_Text5}',
        x34 = 'rgba(0,0,0,1.00)',
        oo = '-o-transform-origin',
        r = 'deg',
        qok = 'easeOutBack',
        e39 = '${_Text6}',
        x36 = 'rgba(0,0,0,0.65)',
        x5 = 'Arial, Helvetica, sans-serif',
        x37 = 'rgba(0,0,0,0.41)',
        l = 'normal',
        x2 = '2.0.0.250',
        x35 = 'rgba(33,64,234,1)',
        ql = 'linear',
        x = 'text',
        e30 = '${_vibrate}',
        w = 'width',
        dt = 'Default Timeline',
        x1 = '2.0.0',
        x28 = 'rgba(209,35,79,1.00)',
        i = 'none',
        ta = 'text-align',
        x26 = 'rgba(52,52,8,1.00)',
        e27 = '${_main_text}';
    var im = 'http://youngcrew.lk/wp-content/themes/young/js/edge_includes/';
    var g19 = 'Untitled-6.png',
        g18 = 'Untitled-4.png',
        g17 = 'Untitled-3.png';
    var s10 = "ඔබගේ පුද්ගලික අවශ්‍යතා සදහා",
        s20 = "ඉතා අඩු මිලට",
        s8 = "ඔබගේ ව්‍යාපාරික අවශ්‍යතා සදහා",
        s3 = "ඔබේම කියා වෙබ් අඩවියක් තවමත් නොමැතිද ?",
        s12 = "දැන්ම අමතන්න!",
        s6 = "දැන් ලතවුනා ඇති!",
        s14 = "0714309008",
        s11 = "වෙබ් අඩවි නිර්මානය කර ගැනීමට";
    var fonts = {};
    var P = Edge.P,
        T = Edge.T,
        A = Edge.A;
    var resources = [];
    var symbols = {
        "stage": {
            v: x1,
            mv: x1,
            b: x2,
            bS: a,
            iS: a,
            gpu: n,
            rI: n,
            cn: {
                dom: [{
                    id: 'main_text',
                    t: x,
                    r: ['2px', '12px', '243px', '48px', 'auto', 'auto'],
                    text: s3,
                    align: "center",
                    n: [x5, x4, "rgba(209,35,79,1.00)", l, i, ""],
                    textShadow: ["rgba(248,133,133,0.65)", 2, 2, 3]
                }, {
                    id: 'Text2',
                    t: x,
                    r: ['13px', '73px', '218px', '34px', 'auto', 'auto'],
                    text: s6,
                    align: "center",
                    n: [x5, x7, "rgba(33,64,234,1.00)", l, i, l],
                    textShadow: ["rgba(0,0,0,0.65)", 3, 3, 3]
                }, {
                    id: 'Text5',
                    t: x,
                    r: ['-251px', '112px', '243px', '26px', 'auto', 'auto'],
                    text: s8,
                    align: "left",
                    n: [x5, x9, "rgba(52,52,8,1.00)", l, i, l]
                }, {
                    id: 'Text6',
                    t: x,
                    r: ['-220px', '150px', '211px', '26px', 'auto', 'auto'],
                    text: s10,
                    align: "left",
                    n: [x5, x9, "rgba(52,52,8,1)", l, i, l]
                }, {
                    id: 'Text7',
                    t: x,
                    r: ['3px', '196px', '238px', '26px', 'auto', 'auto'],
                    text: s11,
                    align: "center",
                    n: [x5, x9, "rgba(52,52,8,1)", l, i, l]
                }, {
                    id: 'Text8',
                    t: x,
                    r: ['5px', '227px', '230px', '34px', 'auto', 'auto'],
                    text: s12,
                    align: "center",
                    n: [x5, x13, "rgba(52,52,8,1)", l, i, l]
                }, {
                    id: 'Text9',
                    t: x,
                    r: ['55px', '261px', '182px', '34px', 'auto', 'auto'],
                    text: s14,
                    align: "left",
                    n: [x5, x15, "rgba(52,52,8,1)", l, i, l]
                }, {
                    id: 'phone_',
                    t: g,
                    r: ['10px', '261px', '34px', '34px', 'auto', 'auto'],
                    f: [x16, im + g17, '0px', '0px'],
                    tf: []
                }, {
                    id: 'vibrate',
                    t: g,
                    r: ['34px', '261px', '16px', '16px', 'auto', 'auto'],
                    f: [x16, im + g18, '0px', '0px']
                }, {
                    id: 'hand_photo',
                    t: g,
                    r: ['-51px', '117px', '25px', '16px', 'auto', 'auto'],
                    f: [x16, im + g19, '0px', '0px']
                }, {
                    id: 'hand_photoCopy',
                    t: g,
                    r: ['-41px', '155px', '25px', '16px', 'auto', 'auto'],
                    f: [x16, im + g19, '0px', '0px']
                }, {
                    id: 'Text10',
                    t: x,
                    r: ['15px', '172px', '211px', '26px', 'auto', 'auto'],
                    text: s20,
                    align: "center",
                    n: [x5, x4, "rgba(209,35,79,1)", l, i, l]
                }],
                sI: []
            },
            s: {},
            tl: {
                "Default Timeline": {
                    fS: a,
                    tS: "",
                    d: 4000,
                    a: y,
                    tt: []
                }
            }
        }
    };
    var S1 = symbols[x21];
    var tl0 = S1.tl[dt].tt,
        st1 = S1.s[a] = {},
        A1 = A(_, tl0, st1);
    A1.A(e22).P(lf, 15).P(tp, 172);
    A1.A(e25).P(tp, 261).P(w, 182).P(lf, 55).P(fs, 32);
    A1.A(e27).P("textShadow.blur", 3, "subproperty").P("textShadow.offsetH", 2, "subproperty").P(c, x28, c).P("textShadow.offsetV", 2, "subproperty").P(lf, 2).P(fs, 19).P(tp, 12).P(ta, po).P(h, 48).P("textShadow.color", x29, "subproperty").P(w, 243);
    A1.A(e30).P(h, 16).P(w, 16).P(lf, 29).T(0, 45, 0.5, ql).T(0.5, 34, 0.5).T(1, 45, 0.5).T(1.5, 34, 0.5).T(2, 45, 0.5, _, 29).T(2.5, 34, 0.5).T(3, 45, 0.5).T(3.5, 34, 0.5).P(tp, 261).T(0, 252, 0.5).T(0.5, 262, 0.5).T(1, 252, 0.5, _, 261).T(1.5, 262, 0.5).T(2, 252, 0.5, _, 261).T(2.5, 262, 0.5).T(3, 252, 0.5, _, 261).T(3.5, 262, 0.5);
    A1.A(e31).P(ta, po).P(h, 26).P(w, 238).P(tp, 202).T(0, 202).P(lf, 5).T(0, 5).P(fs, 16).T(1.5, 17, 0.5, qw);
    A1.A(e32).P(lf, 13).P(w, 218).P(tp, 73).P(ta, po).P(h, 34).P("textShadow.blur", 0, "subproperty").T(1, 3, 1, ql).P("textShadow.offsetH", 0, "subproperty").T(1, 3, 1).P(c, x33, c).T(1, x34, 1, _, x35).P("textShadow.offsetV", 0, "subproperty").T(1, 0).P("textShadow.color", x36, "subproperty").T(1, x37, 1, _, x38).P(fs, 12).T(0, 22, 1).T(1.5, 22);
    A1.A(e39).P(h, 26).P(w, 211).P(lf, -222).T(1, 34, 0.25, qok);
    A1.A(e40).P(or, [100, 100], _, x23).P(oz, [100, 100], _, x23).P(om, [100, 100], _, x23).P(on, [100, 100], _, x23).P(oo, [100, 100], _, x23).P(h, 34).P(w, 34).P(tp, 262).T(0, 256, 0.5, qw).T(0.5, 262, 0.5).T(1, 256, 0.5).T(1.5, 262, 0.5).T(2, 256, 0.5).T(2.5, 262, 0.5).T(3, 256, 0.5).T(3.5, 262, 0.5).P(lf, 10).T(0, 16, 0.5).T(0.5, 10, 0.5).T(1, 16, 0.5).T(1.5, 10, 0.5).T(2, 16, 0.5).T(2.5, 10, 0.5).T(3, 16, 0.5).T(3.5, 10, 0.5).P(rz, 0, t, _, r).T(0, 20, 0.5, ql).T(0.5, 0, 0.5).T(1, 20, 0.5).T(1.5, 0, 0.5).T(2, 20, 0.5).T(2.5, 0, 0.5).T(3, 20, 0.5).T(3.5, 0, 0.5);
    A1.A(e41).P(h, 16).P(tp, 117).P(w, 25).P(lf, -51).T(0.5, 5, 0.25, qok);
    A1.A(e42).P(ov, x24).P(h, 300).P(w, 245).P(bg, x43, c).T(0, x43).P("background-image", [270, [
        ['rgba(253,223,223,1.00)', 14],
        ['rgba(237,246,244,1.00)', 33],
        ['rgba(230,212,212,1.00)', 51],
        ['rgba(200,211,228,1.00)', 81]
    ]], "gradient").T(0, [354, [
        ['rgba(253,223,223,1.00)', 14],
        ['rgba(230,212,212,1.00)', 48],
        ['rgba(200,211,228,1.00)', 81],
        ['rgba(237,246,244,1.00)', 100]
    ]], 2, ql).T(2, [270, [
        ['rgba(253,223,223,1.00)', 14],
        ['rgba(237,246,244,1.00)', 33],
        ['rgba(230,212,212,1.00)', 51],
        ['rgba(200,211,228,1.00)', 81]
    ]], 1).T(3, [270, [
        ['rgba(253,223,223,1.00)', 14],
        ['rgba(237,246,244,1.00)', 33],
        ['rgba(240,224,224,1.00)', 51],
        ['rgba(200,211,228,1.00)', 81]
    ]], 1);
    A1.A(e44).P(tp, 227).P(ta, po).P(h, 34).P(lf, 5).P(fs, 25).P(c, x45, c).T(0, x46, 0.5, ql, x47).T(0.5, x48, 0.25, _, x49).T(0.75, x50, 0.25, _, x51).T(1, x52, 0.25, _, x53).T(1.25, x54, 0.25, _, x55).T(1.5, x56, 0.185, _, x57).T(1.685, x58, 0.315, _, x59);
    A1.A(e60).P(h, 16).P(w, 25).P(lf, -45).T(1.25, 5, 0.25, qok).P(tp, 155).T(1.25, 155);
    A1.A(e61).P(tp, 112).P(fs, 16).P(c, x26, c).P(h, 26).P(lf, -253).T(0, 33, 0.5, qid).P(w, 211).T(0.5, 211);
    Edge.registerCompositionDefn(compId, symbols, fonts, resources);
    $(window).ready(function () {
        Edge.launchComposition(compId);
    });
})(jQuery, AdobeEdge, "EDGE-4530220");