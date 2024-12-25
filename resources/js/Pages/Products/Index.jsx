import { Link } from '@inertiajs/react';

export default function Index({ products }) {
    return (
        <>
            <div className="container mx-auto p-4">
                <h1 className="text-4xl font-bold mb-6 text-center">Book Store</h1>
                <div className="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                    {products.map((product) => (
                        <div key={product.id} className="bg-white shadow-md rounded-lg overflow-hidden">
                            <Link href={`/products/${product.id}`} className="block p-4 hover:bg-gray-100">
                            <div className="w-full h-48 overflow-hidden flex items-center justify-center bg-gray-100">
                            <img
                                src={product.img}
                                alt={product.name}
                                className="max-w-full max-h-full object-contain"
                            />
                        </div>
                                <h2 className="text-xl font-semibold mb-2">{product.name}</h2>
                                <p className="text-gray-700 mb-4">${product.price}</p>
                                <button className="bg-blue-500 text-white px-4 py-2 rounded">View Details</button>
                            </Link>
                        </div>
                    ))}
                </div>
            </div>
        </>
    );
}