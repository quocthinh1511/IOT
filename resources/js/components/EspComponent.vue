<template>




<div> {{ count }}</div>

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
