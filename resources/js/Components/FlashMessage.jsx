export default function FlashMessage({className, message='', type}){
  return (
    <div className={`flex bg-green-100 rounded p-4 mb-4 text-sm text-green-900 ${className}`}>  
      {message}
    </div>
  )
}