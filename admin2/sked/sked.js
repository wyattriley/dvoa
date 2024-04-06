/*
 * javascript functions for the schedule mod page
 */

function trimStr(field)
{
	var tmpStr = trim(field.value);
	if (tmpStr.length != field.value.length)
		field.value = tmpStr;
}

function trim(str)
{
  var trimedStr = new String(str);
  if (trimedStr == "")
    return "";
  var first, last, len = trimedStr.length;
  for (first = 0; first < len  &&  trimedStr.charAt(first) == " ";++first);
  for (last = trimedStr.length; last > 0 && trimedStr.charAt(last - 1) == " "; --last);
  if (first > last)
    return "";
  return trimedStr.substring(first, last);
}

function confirmLink(theLink, theSqlQuery)
{
	var is_confirmed = confirm(theSqlQuery);
	return is_confirmed;
}



function ShowHide()
{
	if (document.getElementById('map_id').value == 99999) {
		document.getElementById('nondvoamap').style.display = 'block';
		document.getElementById('dvoamap').style.display = 'none';
	} else {
		document.getElementById('nondvoamap').style.display = 'none';
		document.getElementById('dvoamap').style.display = 'block';
	}
}

