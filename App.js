import { StatusBar } from 'expo-status-bar';
import React from 'react';

import { StyleSheet, Text, View } from 'react-native';

import { NavigationContainer } from '@react-navigation/native';
import { createStackNavigator } from '@react-navigation/stack';

import RegisterAcc from './Screen/RegisterAcc';
import FrontPage from './Screen/FrontPage';
import Login1 from './Screen/Login1';
import PreLogin from './Screen/PreLogin';
import ResetPass from './Screen/ResetPass';
import MainMenu from './Screen/Customer/MainMenu';
import EWallet from './Screen/Customer/EWallet';
import Topup from './Screen/Customer/Topup';
import OrderFood from './Screen/Customer/OrderFood';


 function App() {
  return (
    <RegisterAcc/> 
    );
}

// const Stack = createStackNavigator();

// function App() {
//   return (
//     <NavigationContainer>
//       <Stack.Navigator>
//         <Stack.Screen name="FrontPage" component={FrontPage} options={{ headerShown: false }}/>
//         <Stack.Screen name="Login1" component={Login1} options={{ headerShown: false }}/>
//         <Stack.Screen name="PreLogin" component={PreLogin} options={{ headerShown: false }}/>
//         <Stack.Screen name="RegisterAcc" component={RegisterAcc} options={{ headerShown: false }}/>
//         <Stack.Screen name="ResetPass" component={ResetPass} options={{ headerShown: false }}/>
//         <Stack.Screen name="EWallet" component={EWallet} options={{ headerShown: false }}/>
//         <Stack.Screen name="MainMenu" component={MainMenu} options={{ headerShown: false }}/>
//         <Stack.Screen name="OrderFood" component={OrderFood} options={{ headerShown: false }}/>
//         <Stack.Screen name="Topup" component={Topup} options={{ headerShown: false }}/>
//       </Stack.Navigator>
//     </NavigationContainer>
//   );
// }

export default App;