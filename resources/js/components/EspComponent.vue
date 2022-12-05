<template>




<div class = "full">
  <div>
    <img class = 'img' src="https://new.sim.edu.vn/wp-content/uploads/2021/11/Logo-BK-400.png">
  </div>
<div class="table">
  <table>
  <tr>
    <th>Họ và tên </th>
    <th>MSSV</th>
    <th>Ghi Chú</th>
  </tr> 
  <tr>
    <td>Lê Quốc Thịnh</td>
    <td>2012112</td>
    <td></td>
  </tr>
  <tr>
    <td>Bùi Trọng Hiếu</td>
    <td>1913317 </td>
    <td></td>
  </tr>
  <tr>
    <td>Huỳnh Nguyễn Đức Phúc Hậu </td>
    <td>1910170 </td>
    <td></td>
  </tr>
</table>
</div>

<h1><span class= 'textnew '><i class="uil uil-medkit"></i> Mach dem nguoi ra vao phong</span></h1>
<div class='container'>
    <div class="font"> 
      <p class = "font"> Số người hiện tại ở phòng:     {{count}}</p>
    </div>
</div>
</div>




</template>





<script>

// Import the functions you need from the SDKs you need
import firebase from 'firebase/app' 
import 'firebase/database'
import 'firebase/auth'
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
const firebaseConfig = { 
  apiKey : "AIzaSyCj9v7OuWW-bf_wHq-qol7vlsMCvcJGiSM" , 
  authDomain : "tkhtn-d7c82.firebaseapp.com" , 
  databaseURL : "https://tkhtn-d7c82-default-rtdb.asia-southeast1.firebasedatabase.app/" , 
  projectId : "tkhtn-d7c82" , 
  storageBucket : "tkhtn-d7c82.appspot.com" , 
  messagingSenderId : "541097754026" , 
  appId : "1:541097754026:web:5f42dd4354d5ffb0927fd3" 
};

// Initialize Firebase
const app = firebase.initializeApp ( firebaseConfig );

// Initialize Firebase
let db = app.database();
let textRef =db.ref('test')

// Initialize Firebase

// export const firestore = getFirestore(firebase)

export default {

    data(){
        return{
            count: 7,
        }
    },  
    mounted(){
      const self = this;
    app.database()
        .ref('test')
        .on('value', function(snapshot) {
            // const id = snapshot.key;

            //----------OR----------//
            self.count = snapshot.val().int || null;
            // if (data) {
            //   const id = Object.keys(data)[0];
            // }
        });

  }
   
    // methods: function getData(){  
    // const starCountRef = ref(database,'posts/' + postId + '/starCount');
    // onValue(starCountRef, (snapshot) => {
    // const data = snapshot.val();
    // updateStarCount(count, data);
    // });
    // return starCountRef;
    // },

}


  

</script>
