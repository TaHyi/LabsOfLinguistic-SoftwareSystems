//------------------------------------------------------------------------------
// <auto-generated>
//     This code was generated from a template.
//
//     Manual changes to this file may cause unexpected behavior in your application.
//     Manual changes to this file will be overwritten if the code is regenerated.
// </auto-generated>
//------------------------------------------------------------------------------

namespace FamLab00004.Models
{
    using System;
    using System.Collections.Generic;
    
    public partial class Account_Type
    {
        [System.Diagnostics.CodeAnalysis.SuppressMessage("Microsoft.Usage", "CA2214:DoNotCallOverridableMethodsInConstructors")]
        public Account_Type()
        {
            this.BankAccounts = new HashSet<BankAccount>();
        }
    
        public int Account_Type_ID { get; set; }
        public string Account_Type1 { get; set; }
    
        [System.Diagnostics.CodeAnalysis.SuppressMessage("Microsoft.Usage", "CA2227:CollectionPropertiesShouldBeReadOnly")]
        public virtual ICollection<BankAccount> BankAccounts { get; set; }
    }
}