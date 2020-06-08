<!DOCTYPE html>
<html>
    <head>
        <script type="text/javascript">
            function validateRegister() {
                if (validateUsername() & &validateEmail() && validatePhoneNumber()){
                    alert("Valid");
                    return true;
                }
                return false;
            }
            function validateUsername() {
                const username = document.getElementById('username').value;
                const usernameCheck = new RegExp("^(?!\s*$).+");
                if (usernameCheck.test(username)) {
                    return true;
                }
                alert("Invalid username: " + username);
                return false;
            }
            function validateEmail() {
                const email = document.getElementById('email').value;
                const emailCheck = new RegExp("^[A-Za-z0-9_]+@[A-Za-z0-9.]+\.[A-Za-z]{2,}$");
                if (emailCheck.test(email)) {
                    return true;
                }
                alert("Invalid email: " + email);
                return false;
            }
            function validatePhoneNumber() {
                const phone = document.getElementById('phone').value;
                const phoneCheck = new RegExp("^[0|+84]+[0-9]{9}$");
                if (phoneCheck.test(phone)) {
                    return true;
                }
                alert("Invalid phone: "+phone);
                return false;
            }

        </script>
    </head>
    <body>
        <form>
            Username: <input type="text" id="username"><br>
            Email: <input type="text" id="email"><br>
            Phone Number: <input type="text" id="phone"><br>
            <input type="button" value="Check Info" onclick="validateRegister()">
        </form>
    </body>
</html>
