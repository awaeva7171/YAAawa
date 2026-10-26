export function stockState(stock) {
  if (stock === 0) return 'empty'
  if (stock <= 5) return 'low'
  return 'available'
}

export function effectivePrice(produit) {
  if (produit.sale_price > 0 && produit.sale_price < produit.price) {
    return produit.sale_price
  }
  return produit.price
}

export function money(montant) {
  return montant.toLocaleString('fr-FR') + ' FCFA'
}
