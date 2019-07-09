/*eslint-env jquery*/
$(function () {
  $('form').submit(function () {
    if (confirm('送信しますか？')) {
      return true;
    }
    return false;
  });
});