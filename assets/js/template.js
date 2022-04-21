function template(vr) {
return `
<li class="paginate">
<div class="language-markdown highlighter-rouge name">
<div class="highlight">
<pre class="highlight">
<code><span class="title" id="building">${vr.building}</span>
<span class="gh" id="address">${vr.address}</span>
<a href="${vr.link}" class="gs" id="link" target="_blank">Take VR</a>
</code>
</pre>
</div>
</div>
</li>
`;
}

/*function template(vr) {
    return `<li><p class="name">Guybrush Threepwood</p></li>`;
}*/