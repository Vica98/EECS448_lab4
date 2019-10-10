

function reset()
{
username = document.getElementById('un');
username.value = username.defaultValue;

password = document.getElementById('p');
password.value = password.defaultValue;

s1 = document.getElementById('s1');
s1.value = s1.defaultValue;

s2 = document.getElementById('s2');
s2.value = s2.defaultValue;

s3 = document.getElementById('s3');
s3.value = s3.defaultValue;

}

function check()
{
  var isGood =true;
  username = document.getElementById('un');
  if(username.value == username.defaultValue || username.value == "")
  {
    eu = document.getElementById('eu');
    eu.value = "Username cannot be empty";
    isGood =false;
    }else {
      hasAt=false;
      hasDot=false;
      posOfAt=0;
      for(var i=0; i<(username.value).length;i++)
      {
        if(username.value[i]=="@")
        {
          posOfAt=i;
          hasAt=true;
        }
      }
      for(var i=posOfAt; i<(username.value).length;i++)
      {
        if(username.value[i]==".")
        {
          hasDot=true;
        }
      }
      if(hasAt==true && hasDot==true)
      {
        eu = document.getElementById('eu');
        eu.value = eu.defaultValue;
      }else {
        eu = document.getElementById('eu');
        eu.value = "Username has to be a valid email";
        isGood =false;
      }
    }

  password = document.getElementById('p');
  if(password.value == password.defaultValue || password.value == "")
  {
    ep = document.getElementById('ep');
    ep.value = "Password cannot be blank";
    isGood =false;
  }else {
    ep = document.getElementById('ep');
    ep.value = ep.defaultValue;

  }

  if(s1.value<0 || isNaN(s1.value) || s1.value>=100){
    p1  = document.getElementById('p1');
    p1.value = "Something is wrong with the input";
    isGood =false;
  }else {
    p1.value = p1.defaultValue;

  }

  if(s2.value<0 || isNaN(s2.value) || s2.value>=100){
    p2  = document.getElementById('p2');
    p2.value = "Something is wrong with the input";
    isGood =false;
  }else {
    p2.value = p2.defaultValue;

  }

  if(s3.value<0 || isNaN(s3.value) || s3.value>=100){
    p3  = document.getElementById('p3');
    p3.value = "Something is wrong with the input";
    isGood =false;
  }else {
    p3.value = p3.defaultValue;

  }
a  = document.getElementById('a');
b  = document.getElementById('b');
c  = document.getElementById('c');
  if(a.checked || b.checked || c.checked)
  {
    es = document.getElementById('es');
    es.value = es.defaultValue;

  }else {
  es = document.getElementById('es');
  es.value = "Check a box";
  isGood =false;
}
return isGood;
}

function s()
{
  if(check()==true)
  {
    return true;
  }else {
    alert("There is some incorrect input");
    return false;
  }
}

function theClick()
{
  if(buttonIndex=="0")
  {
reset();
return false;
}else {
  return (s());
}
}
