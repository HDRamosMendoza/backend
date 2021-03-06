﻿using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace App.Data.Repository.Interface
{
    public interface IAppUnitOfWork:IDisposable
    {
        int Complete();
        //Nos permite implementar mecanismo de agrupar los repositorios.
        IArtistRepository ArtistRepository { get; set; }
        ICustomerRepository CustomerRepository { get; set; }
    }
}
