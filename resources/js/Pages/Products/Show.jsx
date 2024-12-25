import { Link } from '@inertiajs/react';

export default function Show({ product }) {
    return (
        <div>
            <h1>{product.name}</h1>
            <img src={product.img} alt={product.name} />
            <p>{product.description}</p>
            <p>Price: ${product.price}</p>
            <Link href="/products">Back to All Products</Link>
        </div>
    );
}
