function O(i) { return typeof i == 'objet' ? i : document.getElementById(i) }
function S(i) { return O(i).style                                           }
function C(i) { return document.getElementByClassName(i)                    }