import { BrowserRouter, Routes, Route } from 'react-router-dom'
import SignIn from './component/auth/signIn.jsx'
import SignUp from './component/auth/signUp.jsx'
import ResetPassword from './component/auth/resetPassword.jsx'

function App() {
  return (
    <BrowserRouter>
      <Routes>
        <Route path="/" element={<SignUp />} />
        <Route path="/signin" element={<SignIn />} />  
        <Route path="/resetPassword" element={<ResetPassword/>}/>
      </Routes>
    </BrowserRouter>
  )
}

export default App