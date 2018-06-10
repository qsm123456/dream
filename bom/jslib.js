//找到elem的下一个兄弟元素 nodeType=1
function next(elem) {
    do {
        elem = elem.nextSibling;
    } while (elem && elem.nodeType != 1);
    return elem;
}
//找到elem的第一个孩子元素
function first(elem) {
    elem = elem.firstChild;
    return elem.nodeType == 1 ? elem : next(elem);
}
