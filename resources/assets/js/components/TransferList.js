import React, { Component } from 'react'

const TransferList = ({transfers}) => (
    <table className="table">
    <tbody>
        {transfers.map((transfers)=>(

        
            <tr key={transfers.id}>
                <td>{transfers.description}</td>
                <td
                    className={transfers.amount>0 ? 'text-success':'text-danger'}
                >
                    {transfers.amount}
                </td>
            </tr>
       ))}
    </tbody>
</table>
    
)
export default TransferList
